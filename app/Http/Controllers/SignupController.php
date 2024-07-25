<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;

 
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;



class SignupController extends Controller
{
    //




 

 

    public function register()
    {
        return view('admin.signup');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = Hash::make($request->password);
        $user->save();
 
        // return back()->with('success', 'Register successfully');
       return redirect('/admin/login')->with('success', 'Register successfully');
        
    }








 
  //login

    public function login()
    {
        return view('admin.login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'user_name' => $request->user_name,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Username or Password');
    }
 
    // public function logout()
    // {
    //     Auth::logout();
 
    //     return view('admin.login');
    // }
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }
   
}