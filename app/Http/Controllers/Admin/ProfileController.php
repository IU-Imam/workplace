<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
       
        return view('profile');
    }

    public function update(User $user, Request $request)
    {   
      $request->validate([
            'user_img' => 'required|image',
        ]);
  
        $user_img = time().'.'.$request->user_img->getClientOriginalExtension();
        $request->user_img->move(public_path('avatars'), $user_img);
  
        //Auth()->user()->update(['user_img'=>$user_img]);


        $user->update([
            'name' => $request->name,
            'user_img' =>$user_img,
            'updated_at' => now()
        ]);
         
        return back()->with('success','Profile updated successfully!');

    }
     public function show(User $user)
    {
        //show a blog post
      
        return view('profile',['user' => $user]); //returns the view with the post
        
    }

}
