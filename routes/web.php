<?php

use App\Http\Controllers\AthleteController;
use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/athlete', AthleteController::class);
//Route::resource('/athlete/create', AthleteController::class);
Route::resource('/coach', CoachController::class);
//Route::get('/athlete', [AthleteController::class, 'index']);