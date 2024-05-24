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
                'button_lable' => 'Задонатити',
                'button_link' => $gather[0]['donation_link'] 
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
                'button_lable' => 'Проявити Ініціативу',
                'button_link' => "https://www.google.com/maps?sca_esv=832bfc491017b489&output=search&q=".$activity[0]['address']."&source=lnms&entry=mc&ved=1t:200715&ictx=111"
            );



            return view('gatherexample', $data);
        }else{
            return view('');
        }
    }
}
