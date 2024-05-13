<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Register;
use App\Http\Controllers\RegisterSubmit;
use App\Http\Controllers\Gathers;
use App\Http\Controllers\Activities;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\Cabinet;
use App\Http\Controllers\Initiations;
use App\Http\Controllers\Login;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\CreateInitiation;
use App\Http\Controllers\gatherExample;
// use App\Http\Controllers\ImageUploadController;

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


//Main pages
Route::get('/', [Home::class, 'run'])->name('home');;
Route::get('/contacts', [Contacts::class, 'run']);
Route::get('/initiations', [Initiations::class, 'run']);
Route::get('/gathers', [Gathers::class, 'run']);
Route::get('/activities', [Activities::class, 'run']);


//Register
Route::get('/register', [Register::class, 'run']);
Route::get('/login', [Login::class, 'run']);

Route::post('/register/submit', [RegisterSubmit::class, 'submit']);
Route::post('/login', [Login::class, 'login']);


//Cabinet
Route::get('/cabinet', [Cabinet::class, 'run'])->name('cabinet');
Route::get('/create-gather', [Gathers::class, 'createGather']);
Route::post('/update-user-data', [Cabinet::class, 'updateUserData'])->name('updateUserData');


//other
//Route::post('/upload', [ImageUploadController::class, 'uploadImg'])->name('uploadImg');
Route::post('/createGather', [Cabinet::class, 'createGatherPost'])->name('createGatherPost');



//Reset Password
Route::get('/reset-password', [ResetPassword::class, 'showResetForm'])->name('password.request');
Route::post('/password/email', [ResetPasswordController::class, 'reset'])->name('password.email');


// Initiations
Route::get('/create-initiation', [CreateInitiation::class, 'create'])->name('createInitiation');


// GatherExample
Route::get('/gather-example', [gatherExample::class, 'run'])->name('gatherExample');
Route::get('/gather/{id}', [gatherExample::class, 'gather_detail']);


//Home
Route::post('/getGathers', [Home::class, 'getGathers'])->name('getGathers');;
Route::get('/getCities', [Home::class, 'getCities'])->name('getCities');;

