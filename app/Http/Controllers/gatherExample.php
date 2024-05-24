<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gathers;
use App\Models\Activities;

class gatherExample extends Controller
{
    public function run() {
        return view('gatherexample');
    }

    public function gather_detail($id) {
        $gather = Gathers::where('gather_id', $id)->get();

        if (!$gather->isEmpty()) {

            $data = array(
                'record' => $gather[0],
                'button_lable' => 'Задонатити'
            );



            return view('gatherexample', $data);
        }else{
            return view('');
        }

       
    }

    function activity_detail($id){
        $activity = Activities::where('activity_id', $id)->get();

        if (!$activity->isEmpty()) {

            $data = array(
                'record' => $activity[0],
                'button_lable' => 'Проявити Ініціативу'
            );



            return view('gatherexample', $data);
        }else{
            return view('');
        }
    }
}
