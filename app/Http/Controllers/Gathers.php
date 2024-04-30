<?php

namespace App\Http\Controllers;
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

}
