<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\user;

class HomeController extends Controller
{
    public function admin_dash()
    {
        $usertype=Auth::user()->user_type;
        
        if($usertype=='admin'){

            return view('admin_dashboard');
        }else{
            return view('dashboard');
        }
    }
}
