<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gathers;

class gatherExample extends Controller
{
    public function run() {
        return view('gatherexample');
    }

    public function gather_detail($id) {
        $gather = Gathers::where('gather_id', $id)->get();

        if (!$gather->isEmpty()) {

            $gather_data = array(
                'gather' => $gather[0]
            );



            return view('gatherexample', $gather_data);
        }else{
            return view('');
        }

       
    }
}
