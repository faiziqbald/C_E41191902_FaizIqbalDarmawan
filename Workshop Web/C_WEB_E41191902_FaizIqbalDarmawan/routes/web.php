<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PengalamanKerjaController;

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

Route::group(['namespace' => ''], function(){
    Route::resource('dashboard', DashboardController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('statusAdmin');

Route::get("/error", function(){
    return view('error');
})->name('error');

Route::group(['namespace' => ''], function(){

    Route::resource('dashboard', DashboardController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);
});