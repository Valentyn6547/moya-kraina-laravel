<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Register;
use App\Http\Controllers\RegisterSubmit;
use App\Http\Controllers\Gathers;
use App\Http\Controllers\Activities;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\gatherExample;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [Home::class, 'run'])->name('home');;
Route::get('/register', [Register::class, 'run']);
Route::get('/gathers', [Gathers::class, 'run']);
Route::get('/activities', [Activities::class, 'run']);
Route::get('/contacts', [Contacts::class, 'run']);
Route::get('/gatherexample', [gatherExample::class, 'run']);


Route::post('/register/submit', [RegisterSubmit::class, 'submit']);




