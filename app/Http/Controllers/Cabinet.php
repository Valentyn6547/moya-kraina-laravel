<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Gathers;
use App\Models\GatherTags;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Cabinet extends Controller
{
    function run(){
        $user_id = Session::get('user_id');
        $user = User::where('user_id', $user_id)->first();


        if(Session::get('user_type') == 'volunteer' && Session::get('autorizated') && $user){

            $gathers = Gathers::where('user_id', $user_id)->get();

            $hashTagsQuery = Gathers::query();

            $hashTagsQuery->select('gather_tags.*');
            $hashTagsQuery->join('users', 'users.user_id', '=', 'gathers.user_id');
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

       
            $user_data = [
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'isverefied' => $user->isverefied,
                'city' => $user->city,
                'user_type' => $user->user_type,
                'gathers' => $gathers,
                'recordHashTags' => $recordHashTags
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


    function createGatherPost(Request $request){

        $user_id = Session::get('user_id');

    
    

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'string',
            'donation_link' => 'required|url',
            'publish_date' => 'required|date',
            'goal_amount' => 'required|numeric',
            'status' => 'required|in:active,inactive,closed',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 

        $gather = new Gathers();
        $gather->user_id = $user_id;
        $gather->title = $validatedData['title'];
        $gather->description = $validatedData['description'];
        $gather->donation_link = $validatedData['donation_link'];
        $gather->publish_date = $validatedData['publish_date'];
        $gather->goal_amount = $validatedData['goal_amount'];
        $gather->status = $validatedData['status'];


        if ($request->hasFile('image')) {
            $imagePath = $request->image->store('images', 'public');
            // Get the full URL of the stored image
            $imageUrl = Storage::url($imagePath);
            $gather->image_path = $imageUrl;
        }
       
        $gather->save();

        
        if ($request->has('hashTags') && strlen($request->get('hashTags')) < 200) {
            $tags = explode(' ', $request->get('hashTags'));
            foreach($tags as $tag){
                $record = new GatherTags();
                $record->gather_id = $gather->gather_id;
                $record->gather_tag_name = $tag;
                $record->save();
            }
        }

        return true;
    }


    function updateGatherPost(Request $request){

        $user_id = Session::get('user_id');
        if(empty($user_id)){return false;}

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'string',
            'donation_link' => 'required|url',
            'publish_date' => 'required|date',
            'goal_amount' => 'required|numeric',
            'status' => 'required|in:active,inactive,closed',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 


       
    
        $gather = Gathers::where('user_id', $user_id)
                        ->where('gather_id', $request->get('gather_id'))->first();

        if($gather){
            $gather->title = $validatedData['title'];
            $gather->description = $validatedData['description'];
            $gather->donation_link = $validatedData['donation_link'];
            $gather->publish_date = $validatedData['publish_date'];
            $gather->goal_amount = $validatedData['goal_amount'];
            $gather->status = $validatedData['status'];
    
    
            if ($request->hasFile('image')) {
                $imagePath = $request->image->store('images', 'public');
                
                // Get the full URL of the stored image
                $imageUrl = Storage::url($imagePath);
                $gather->image_path = $imageUrl;
            }
           
            $gather->save();
        }else{
            return false;
        }
       


        return true;
    }
}
