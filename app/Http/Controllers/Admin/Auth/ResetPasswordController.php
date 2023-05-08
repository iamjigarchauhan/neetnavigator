<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function reset(Request $request){
        $validator = Validator::make($request->all(), [
            'password'=>'required|confirmed',
            'password_confirmation'=>'required|same:password'
        ]);
        if($validator->fails()){
            return redirect()->back()->withError($validator->messages());
        }
        $user = Admin::where('email',$request->email)->first();
        $user->password = Hash::make($request->password);
        $user->update();
        
        return redirect()->back()->with(['success'=>'The password is updated successfully.']);
    }
}
