<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/create';

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        return redirect('/create');
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed, redirect to the intended page
        //     return redirect()->intended('dashboard');
        // } else {
        //     // Authentication failed, redirect back with error message
        //     return back()->withErrors([
        //         'message' => 'Wrong username or password.',
        //     ]);
        // }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
