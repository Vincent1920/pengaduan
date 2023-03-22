<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class new_pengaduan extends Controller
{
    public function newpengaduan(){
        return view('pengaduan.new_pengaduan');
    }
}
