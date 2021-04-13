<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Frontend\HomeController;

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

Route::resource('user', ManagementUserController::class);
//Route::get('/', [ManagementUserController::class, 'index']);

//Route::get("/home", function(){
 //   return view("home");
//});

Route::group(['namespace' => ''], function(){
    Route::resource('home', HomeController::class);
});