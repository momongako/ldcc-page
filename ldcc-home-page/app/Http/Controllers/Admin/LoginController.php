<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    //function to login admins
    public function login(Request $request) {
        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:4',
            //'g-recaptcha-response'=>'required',
        ]);

        //attempt to login the admins in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if successful redirect to admin dashboard
            return redirect()->intended(route('admin.dashboard'))->withCookie(cookie()->forever('allowCkfinder', "admin"));
        }
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }


    // login from for
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->withCookie(cookie()->forget('allowCkfinder'));
    }
}
