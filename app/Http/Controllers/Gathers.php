<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Gathers extends Controller
{
    function run(){
        return view('gathers');
    }


    function createGather(){

        return view('creategather');
    }

    function createGatherPost(Request $request){

       $validatedData = $request->validate([
           'user_id' => 'required|integer|exists:users,user_id',
           'title' => 'required|string|max:255',
           'description' => 'required|string|max:1000',
           'donation_link' => 'required|url|max:255',
           'publish_date' => 'required|date',
       ]);

    //    $gather = new Gathers();
    //    $gather->gather_id = $validatedData['user_id'];
    //    $gather->title = $validatedData['title'];
    //    $gather->description = $validatedData['description'];
    //    $gather->donation_link = $validatedData['donation_link'];
    //    $gather->publish_date = $validatedData['publish_date'];
    //    $gather->save();

       return back()->with('success', 'Gather created successfully!');
    }
}
