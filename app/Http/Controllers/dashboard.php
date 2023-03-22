<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class dashboard extends Controller
{
    public function dashboard ( User $user){

        // return $user;
        return view ('dashboard/dashboard',[

            // 'masyarakat' => masyarakat::all()
        ]);
    }

    
}
