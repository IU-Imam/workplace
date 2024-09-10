<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\ProfileController;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\PostController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $users)
    {
        $users = User::all();

        return view('welcome', compact('users'));
        //return view('userprofile', compact('users'));
    }
    public function changePassword()
{
   return view('change-password');
}

public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
 public function show(User $user)
    {
        //show a blog post
       
        return view('userprofile',['user' => $user]); //returns the view with the post
        
    }

}
