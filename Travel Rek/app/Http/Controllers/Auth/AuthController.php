<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // validate 
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => 'required',
            'password' => 'required|min:6'
        ]);
        // save in users table 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        // login user here 
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
        return redirect()->route('register');
    }

    public function login(Request $request)
    {
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // login code
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication passed...
            if (Auth::user()->is_admin == 1) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Input proper email/password.');
        }
    }

    public function changePasswordPost(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        #Match The Old Password
        if(Hash::check($request->old_password,Auth::user()->password)){
            return redirect()->route('myProfile')->with("error", "Old Password Doesn't match!");
        }
        #Update the new Password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->route('myProfile')->with("status", "Password changed successfully!");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
