<?php

namespace App\Http\Controllers;
use App\Models\Gathers as GatherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class Gathers extends Controller
{
    function run(){
        return view('gathers');
    }


    function createGather(){

        return view('creategather');
    }

    function editGather($gather_id){
        $user_id = Session::get('user_id');
        if(empty($user_id)){return false;}

        $gather = GatherModel::where('user_id', $user_id)
        ->where('gather_id', $gather_id)->get();

       if(!empty($gather)){
            $data = [
                'gather' => $gather[0]
            ];

            return view('editgather', $data);
       }else{
            return view('home');
       }

        
    }

}
