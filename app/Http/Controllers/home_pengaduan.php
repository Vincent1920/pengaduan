<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_pengaduan extends Controller
{
    public function pengaduan (){
        return view ('pengaduan.pengaduan');

    }
}
