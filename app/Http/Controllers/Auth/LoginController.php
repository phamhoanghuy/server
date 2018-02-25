<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function submitLogin(Request $request)
    {
        //dd(bcrypt('123456'));
        $this->validate($request, array(
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|min:6'
        ));

        $email = $request['email'];
        $password = $request['password'];

        return redirect(route('home'));

        /*if (Auth::attempt(['email' => "phamhoanghuy@gmai.com", 'password' => "123456"])) {
            Session::put('admins', Auth::User());

            return redirect(route('home'));
        } else {
            Session::flash('login_fail', __('login.invalid_login'));
        }*/
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        if (!Auth::check() && !Auth::guard('web')->check()) {
            $request->session()->flush();
            $request->session()->regenerate();
        }
        return redirect(route('login'));
    }
}
