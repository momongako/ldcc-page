<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Carbon\Carbon;
use App\Models\User;
use MetaTag;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation
    |
    */

    use RedirectsUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register/success';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        MetaTag::set('title', '新規会員の登録｜ビセンテゲート');
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:6','max:13','regex:/^[a-zA-Z0-9]+$/i'],
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'subscribe_flag' => ['numeric'],
            'year_of_birth' => ['required', 'numeric'],
            'province' => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $userData = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'name' => sprintf('%s %s', $data['first_name'], $data['last_name']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'subscribe_flag' => $data['subscribe_flag'],
            'gender' => $data['gender'],
            'subscribe_at' => $data['subscribe_flag'] == 1 ? Carbon::now()->toDateTimeString() : null,
            'province' => $data['province'],
            'year_of_birth' => $data['year_of_birth'],
        ];
        
        return User::create($userData);
    }
    
    /**
     * Show the application registration form.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm(Request $request)
    {
        $years = [];
        $provinces = config('custom.province');
        for($i = date('Y'); $i > date('Y') - 100; $i--){
            $years[$i] = $i;
        }
        $user = [
            'first_name' => '',
            'last_name' => '',
            'year_of_birth' => '',
            'email' => '',
            'subscribe_flag' => '1',
            'gender' => '1',
            'province' => ''
        ];
        if ($request->back) {
            if ($request->session()->has('register')) {
                $user = $request->session()->get('register');
            }
        }
        
        return view('auth.register', compact('provinces','user', 'years'));
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();      
        $request->session()->put('register', $request->all());
        
        return redirect()->route('register.confirm');;
    }
    
    /**
     * Show the confirm form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        $user = $request->session()->get('register');
        $provinces = config('custom.province');
        
        return view('auth.confirm', compact('user','provinces'));
    }
    
    /**
     * Handle a confirm request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postConfirm(Request $request)
    {
        $storeValues = $request->session()->get('register');
        if ($request->action === 'back') {
            return redirect()->route('register')->withInput($storeValues);
        }
        $this->validator($storeValues)->validate();
        if (!isset($storeValues['subscribe_flag'])) {
            $storeValues['subscribe_flag'] = 2;
        }
        if (!isset($storeValues['status'])) {
            $storeValues['status'] = 1;
        }
        
        event(new Registered($user = $this->create($storeValues)));
        //$this->guard()->login($user);

        return redirect($this->redirectPath());       
    }

    /**
     * Handle a success request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function success()
    {        
        return view('auth.success');
        
    }
    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
