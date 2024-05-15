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
        $gathersQuery->leftJoin('users', 'users.user_id', '=', 'gathers.user_id');

        // if(isset($request['hash_tag']) && !empty($request['hash_tag'])) {
        //     $gathersQuery->leftJoin('gather_tags', 'gather_tags.gather_tag_id', '=', 'gathers.gather_id');
        //     $gathersQuery->where('gather_tags.gather_tag_name', 'like',  '%'.$request['hash_tag'].'%');
        // }

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
       
        if(isset($request['city_input']) && !empty($request['city_input'])) {
            $gathersQuery->where('city', $request['city_input']);
        }
        if(isset($request['search_text']) && !empty($request['search_text'])) {
            $gathersQuery->where('gathers.title', 'like', '%'.$request['search_text'].'%');
        }
       
     

    

        $gathers = $gathersQuery->limit(36)->get();

        $gather_Ids = array();
        foreach($gathers as $gather){
            $gather_Ids[] = $gather['gather_id'];
        }



        //HASH TAGS QUERY
        $hashTagsQuery = Gathers::query();

        $hashTagsQuery->select('gather_tags.*');
        $hashTagsQuery->whereIn('gathers.gather_id', $gather_Ids);
        $hashTagsQuery->join('gather_tags', 'gather_tags.gather_id', '=', 'gathers.gather_id');
        $hashTags = $hashTagsQuery->get();

        


        $recordHashTags = array();

        foreach($hashTags as $tag){
            if(isset($recordHashTags[$tag['gather_id']])){
                $temp_array = &$recordHashTags[$tag['gather_id']];
                array_push($temp_array,$tag['gather_tag_name']);
            }else{
                $recordHashTags[$tag['gather_id']] = array($tag['gather_tag_name']);
            }
        }



        $responce = array(
            'gathers' => $gathers ,
            'recordHashTags' => $recordHashTags
        );
        

        return response()->json($responce);
    }



    public function getCities(Request $request) {
       $query = Ukrainian_Cities::query();
       $cities = $query->pluck('city_ua');
     
       return $cities;
    }
}
