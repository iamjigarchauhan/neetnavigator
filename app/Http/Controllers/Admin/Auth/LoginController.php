<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('backend.auth.login');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
             return redirect()->route('admin.dashboard');
        }
        return redirect()->to('admin/login')->with('error', 'Authentication failed.');
    }
    
    public function logout(Request $request){
        // dd($request);
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flash('action', 'logout');
        return redirect()->to('admin/login')->with('success', __('Logged out successfully'));
    }
}
