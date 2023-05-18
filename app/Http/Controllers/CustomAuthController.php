<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoundCutoffCollege;
use App\Models\College;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\State;

use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        $this->pageTitle = 'Login';
        return view('auth.login', $this->data);
    }

    public function home()
    {
        $this->collegeTypes = College::getCollegeInstitutionType();
        $this->stateCategories = CategoryRoundCutoffCollege::STATE_CATEGORY;
        return view('home', $this->data);
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('neet-college/user')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withError('Login details are not valid');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect("neet-college/user");
        }

        $this->pageTitle = 'Register';
        $this->states = State::allState('active');
        session()->forget('user_mark');
        return view('auth.register', $this->data);
        // return view('i', $this->data);
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile_no' => 'required|min:10|max:10|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['full_name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'password' => Hash::make($data['password'])
        ]);

        // login while customer is register
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('neet-college/user')
                ->withSuccess('Signed in');
        }
        return redirect("neet-college/user")->withSuccess('You have signed-in');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
