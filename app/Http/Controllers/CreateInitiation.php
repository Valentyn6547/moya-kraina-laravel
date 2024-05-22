<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Activities;
use App\Models\ActivityTags;
use Illuminate\Support\Facades\Storage;

class CreateInitiation extends Controller
{
    public function create()
    {
        if(!Session::get('autorizated')) {
            return response()->json(['error' => 'User not logined'], 404);}

            
        return view('createinitiation');
    }


    public function createActivitiesPost(Request $request) {
        if(!Session::get('autorizated')) {
            return response()->json(['error' => 'User not logined'], 404);}

            $user_id = Session::get('user_id');
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string|max:255', // Allow description to be optional
                'publish_date' => 'nullable|date', // Allow publish_date to be optional
                'time' => 'required|date_format:H:i', // Validate time format
                'status' => 'required|in:active,inactive', // Ensure status is one of the allowed values
                'address' => 'nullable|string|max:255', // Allow address to be optional
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            
            // Create a new Activity instance with validated data
            $activity = new Activities();
            $activity->user_id = $user_id;
            $activity->title = $validatedData['title'];
            $activity->description = $validatedData['description']; // Optional
            $activity->publish_date = $validatedData['publish_date']; // Optional
            $activity->registration_link = 'empty';
            $activity->report_info = 'empty';
            $activity->time = $validatedData['time'];
            $activity->status = $validatedData['status'];
            $activity->address = $validatedData['address']; // Optional
            // Save the Activity to the database

            if ($request->hasFile('image')) {
                $imagePath = $request->image->store('images', 'public');
                
                // Get the full URL of the stored image
                $imageUrl = Storage::url($imagePath);
                $activity->image_path = $imageUrl;
            }


            $activity->save();

            if ($request->has('hashTags') && strlen($request->get('hashTags')) < 200) {
                $tags = explode(' ', $request->get('hashTags'));
                foreach($tags as $tag){
                    $record = new ActivityTags();
                    $record->activity_id  = $activity->activity_id;
                    $record->activity_tag_name = $tag;
                    $record->save();
                }
            }

            return true;
    }


}
