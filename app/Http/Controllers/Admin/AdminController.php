<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Admin;

class AdminController extends Controller
{

    public function profile(Request $request){
        $user = Admin::find(auth()->user()->id);
        return view('backend.profile',compact('user'));
    }
    public function updateProfile(Request $request){
        $user = Admin::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        return redirect()->back()->with('success','Profile has been updated.');
    }
    public function settings(Request $request) 
    {
        $setting = Setting::pluck('value','key')->toArray();
        // $cars =  Car::select('name', 'model','category','id')->where('status','enabled')->get();
        return view('backend.settings',compact('setting'));
    }
    public function updateSettings(Request $request)
    {
        if(!empty($request->name)){
            Setting::updateOrCreate( ['key'=>'name','value'=>$request->name] );
        }
        if($request->hasFile('logo') && !empty($request->logo)){
            Setting::updateOrCreate( ['key'=>'logo','value'=>base64_encode(file_get_contents($request->file('logo')))] );
        }
        if($request->hasFile('bg_image') && !empty($request->bg_image)){
            Setting::updateOrCreate( ['key'=>'bg_image','value'=>base64_encode(file_get_contents($request->file('bg_image')))] );
        }
        if($request->hasFile('favicon') && !empty($request->favicon)){
            Setting::updateOrCreate( ['key'=>'favicon','value'=>base64_encode(file_get_contents($request->file('favicon')))] );
        }
        return redirect()->route('admin.settings')->with('success','Settings has been updated.');
    }
}
