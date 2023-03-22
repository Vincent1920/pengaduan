<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
    public function login (){
        return view('login_register.login.login');
    }

    // public function  authenticate (Request $request){
    //     // return $request;
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('/dashboard');
    //     }
    //     return Redirect('/login');
    //     // return Redirect('/login')->with('loginerror','Registration susccrssful!! Please login' );

    //  }

    public function authenticate( Request $request)
    {
        // return $request;
   $credentials = $request->validate([
     // :dns
     
     'email'=>'required | email:dns', 
     'password'=>'required',
    ]);
    // dd ($credentials);
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginerror','login failed!!');
 
    }
        public function logout(){

            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/home');
        }
}
