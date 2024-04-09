<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cabinet extends Controller
{
    function run(){
        if(Session::get('user_type') == 'volunteer' && Session::get('autorizated')){
            return view('cabinet');
        }else{
            return view('home');
        }
        
    }
}
