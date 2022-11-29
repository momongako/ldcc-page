<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use MetaTag;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        MetaTag::set('title', '会員情報｜ビセンテゲート');
        $this->middleware('auth');
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
            'password' => ['nullable','string', 'min:6'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'subscribe_flag' => ['nullable'],
            'year_of_birth' => ['required', 'numeric'],
            'province' => ['required'],
        ]);
    }

    /**
     * Update user profile.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function updateProfile(array $data)
    {
        $profile = $data;
        unset($profile['_token']);
        $loginUser = Auth::user();
        // check subscribe_flag before and after
        if ($loginUser->subscribe_flag != $data['subscribe_flag']) {
            if ($loginUser->subscribe_flag == 1) {
                $profile['unsubscribe_at'] = Carbon::now()->toDateTimeString();
                $profile['subscribe_at'] = null;
            } else {
                $profile['subscribe_at'] = Carbon::now()->toDateTimeString();
                $profile['unsubscribe_at'] = null;
            }
            
        }
        if (!empty($profile['password'])) {
            $profile['password'] = Hash::make($data['password']);
        } else {
            unset($profile['password']);
        }
        // check subscribe_flag before and after
        if ($profile['status'] == 1 && $loginUser->deactive_at) {
            $profile['deactive_at'] = null;
        }

        $profile['name'] = sprintf('%s %s', $data['first_name'], $data['last_name']);
        
        return $loginUser->update($profile);
    }
    
    /**
     * Show the profile form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $provinces = config('custom.province');
        $user = Auth::user();
        
        return view('user.show', compact('provinces','user'));
    }
    
    
    /**
     * Show the profile form.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $years = [];
        $provinces = config('custom.province');
        for($i = date('Y'); $i > date('Y') - 100; $i--){
            $years[$i] = $i;
        }
        $loginUser = Auth::user();
        $user = [
            'first_name' => $loginUser->first_name,
            'last_name' => $loginUser->last_name,
            'year_of_birth' => $loginUser->year_of_birth,
            'email' => $loginUser->email,
            'subscribe_flag' => $loginUser->subscribe_flag,
            'gender' => $loginUser->gender,
            'province' => $loginUser->province,
        ];
        if ($request->back) {
            if ($request->session()->has('edit-profile')) {
                $user = $request->session()->get('edit-profile');
                $user['email'] = Auth::user()->email;
                if (!isset($user['subscribe_flag'])) {
                    $user['subscribe_flag'] = 2;
                }
            }
        }
        
        return view('user.edit', compact('provinces','user','years'));
    }
    /**
     * Handle a change profile request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validator($request->all())->validate();
        $request->session()->put('edit-profile', $request->all());
        
        return redirect()->route('user.confirm');
    }
    
    /**
     * Show the confirm form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        $user = $request->session()->get('edit-profile');
        $provinces = config('custom.province');
        $user['email'] = Auth::user()->email;
        
        return view('user.confirm', compact('user','provinces'));
    }
    
    /**
     * Handle a confirm request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeValues = $request->session()->get('edit-profile');
        if ($request->action === 'back') {
            return redirect()->route('user.edit')->withInput($storeValues);
        }
        try {
            if (!isset($storeValues['subscribe_flag'])) {
                $storeValues['subscribe_flag'] = 0;
            }
            if (!isset($storeValues['status'])) {
                $storeValues['status'] = 1;
            }
            $this->updateProfile($storeValues);
            $message = __('変更を保存しました');
        } catch (\Exception $e) {
            $message = __('更新が失敗しました');
            
            return redirect()->back()->with('message', $message);
        }
        
        return redirect()->route('user.show')->with('message', $message);
    }

    /**
     * 退会申請
     *
     * @return \Illuminate\Http\Response
     */
    public function leaveEdit(Request $request)
    {
        $loginUser = Auth::user();
        if ($loginUser->deactive_at) {
            $message = __('すでに退会申請済みです。');
            return redirect()->route('user.leave_result')->with('message', $message);
        }
        return view('user.leave_edit');
    }

    /**
     * 退会申請用更新処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function leaveUpdate(Request $request)
    {
        try {
            $loginUser = Auth::user();
            $profile = [
                'deactive_at' => Carbon::now()->toDateTimeString(),
            ];
            $loginUser->update($profile);
            $message = __('退会処理を完了しました。');
            Auth::guard()->logout();
            return redirect()->route('login')->with('message', $message);
        } catch (\Exception $e) {
            $message = __('更新が失敗しました。もう一度処理をやり直してください。');
        }
        return redirect()->route('user.leave_result')->with('message', $message);
    }

    /**
     * 退会申請結果
     *
     * @return \Illuminate\Http\Response
     */
    public function leaveResult(Request $request)
    {
        return view('user.leave_result');
    }
}
