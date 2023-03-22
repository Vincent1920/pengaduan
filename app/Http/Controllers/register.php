<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Autth;
class register extends Controller
{
    public function register (){
        return view ('login_register.register.register1');
    }
    
    
    public function store( Request $request)
    { 
        // return $request->all();
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'nik'=>'required|max:255',
            'username'=>['required','min:3' ,'max:255','unique:users'],
            'email'=>'required|email:dns| unique:users',
            'password'=>'required |min:5|max:255'
            
        ]); 
        // dd('bob');
        // $validatedData['password']=bcrypt($validatedData['passsword']);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        user::create($validatedData);
        // $request->session()->flash('success','sregistration susccrssfull!! please login' );
    
         return Redirect('/login')->with('success','Registration susccrssful!! Please login' );
    }
}
  
