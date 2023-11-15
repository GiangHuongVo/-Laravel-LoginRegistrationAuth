<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        
        return view('login');
    }

    function registration(){
        if(Auth::check()){
            return redirect(route('home'));
        }

        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required', // same of name in html name="email"
            'password' => 'required' // same of name in html name="password"
        ]);

        // Check email and password
        $credentials = $request -> only('email', 'password');
        if(Auth::attempt($credentials)) {
            // True -> go to Home page
            return redirect() -> intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");

    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // same of name in html name="email"
            'password' => 'required' // same of name in html name="password"
        ]);

       
        $data['name'] = $request -> name;
        $data['email'] = $request -> email;
        $data['password'] = Hash::make($request -> password);
        
        $user=User::create($data);

        // Check if successful
        if(!$user){
            return redirect(route('registration'))->with("error", "Register failed, try again!"); 
        }

        return redirect(route('login'))->with("success", "Register successfully, Login to access the app"); 
    }

    function logout(){
        // Clean the session
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
