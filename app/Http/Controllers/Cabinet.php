<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Cabinet extends Controller
{
    function run(){
        if(Session::get('user_type') == 'volunteer' && Session::get('autorizated')){
            $user = User::where('user_id','=',  Session::get('user_id'),)->first();

            $user_data = [
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'isverefied' => $user->isverefied,
                'city' => $user->city,
                'user_type' => $user->user_type
            ];

            return view('cabinet', $user_data);
        }else{
            return view('home');
        }

    }


    function updateUserData(){

    }
}
