<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use App\Http\Validations\LoginValidation;
use Illuminate\Http\Request;
use Auth;
use App\Model\User;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (Auth::user()->role == User::ROLES['admin']) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == User::ROLES['student']) {
            return redirect()->back();
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm() {
    	return view('auth.login_register');
    }

    public function login(LoginValidation $request) {
        $username = $request->login_username;
        $password = $request->login_password;
        if( Auth::attempt(['username' => $username, 'password' => $password])) {
            $this->redirectTo();
        } else {
            Session::flash('error', 'Username hoặc mật khẩu không đúng!');
            return redirect('login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
