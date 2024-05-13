<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gathers;
use App\Models\Ukrainian_Cities;

class Home extends Controller
{
    public function run() {
        return view('home');
    }

    public function getGathers(Request $request) {
        $gathersQuery = Gathers::query();

        $gathersQuery->select('gathers.*', 'users.city');
        $gathersQuery->rightJoin('users', 'users.user_id', '=', 'gathers.user_id');
      

        // Apply filters based on specific conditions
        if(isset($request['gather_filter_input'])) {
            
            $filters = explode(';', $request['gather_filter_input']);

            $filter_name = $filters[0];
            $filter_value = $filters[1];

            switch($filter_name){
                case 'status':
                    $gathersQuery->where('status', $filter_value);
                    break;
            }

           
        }

        if(isset($request['city_input'])) {
            $gathersQuery->where('city', $request['city_input']);
        }

    

        $gathers = $gathersQuery->limit(16)->get();

        return response()->json($gathers);
    }



    public function getCities(Request $request) {
       $query = Ukrainian_Cities::query();
       $cities = $query->pluck('city_ua');
     
       return $cities;
    }
}
