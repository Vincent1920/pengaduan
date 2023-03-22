<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class home extends Controller
{
    public function home(){
        return view('home.view');
    }
}
