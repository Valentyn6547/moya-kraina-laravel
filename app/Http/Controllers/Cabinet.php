<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Cabinet extends Controller
{
    function run(){
        $user_id = Session::get('user_id');
        $user = User::where('user_id', $user_id)->first();
  

        if(Session::get('user_type') == 'volunteer' && Session::get('autorizated') && $user){
           
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


    function updateUserData(Request $request){

        if(!Session::get('autorizated')) {
            return response()->json(['error' => 'User not logined'], 404);}


        $validatedData = $request->validate([
            'full-name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        if(strpos($validatedData['full-name'], ' ') !== false){
            $user_id = Session::get('user_id');
            $fullName = explode(' ', $validatedData['full-name']);

            // Create a new user with the validated data
            $user = User::where('user_id', $user_id)->first();
            $user->name = $fullName[0];
            $user->surname = $fullName[1];
            $user->city = $validatedData['city'];
            $user->save();
        }else{
            return response()->json(['error' => 'Please enter surname with space!']);
        }


        return true;
    }
}
