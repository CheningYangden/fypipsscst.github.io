<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use Image;

class ProfileController extends Controller
{
    /**
     * Get the user profile view
     */
    public function profile()
    {
        return view('profile');
    }
    /**
     *update the authentication user profile
     */
    public function profileUpdate(Request $request)
    {

        //validation rule
        $request->validate([
            'name' => 'required|min:6|string|max:255',
            'email' => 'required|email|string|max:255'

        ]);
        //save the profile update
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');;
    }

    public function changePasswordForm()
    {
        return view('changepassword');
    }

    public function changePassword(Request $request)
    {
        if(!(Hash::check($request->get('current_password'), Auth::user()->password))){
            return back()->with('error','Your current password doesnot match with what you provided');
        }
        if(strcmp($request->get('cureent_password'),$request->get('new_password'))==0)
        {
            return back()->with('error','Your current password cannot be same with new password'); 
        }
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required'

        ]);
        $user=Auth::user();
        $user->password=bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('message', 'Password changed successfully');

    }
    public function getProfileAvatar(){
        return view('profilepicture');


    }
    public function profilePictureUpload(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/img/avatar/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();


        }
        return back()->with("message", 'Profile Picture Uploaded Successfully');

    }
}
