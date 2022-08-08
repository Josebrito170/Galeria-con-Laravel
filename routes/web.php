<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\HomeController;


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

Route::resource('/', App\Http\Controllers\HomeController::class);


Route::get('/admin', function(){
	return view('admin.home');
})->name('admin')->middleware('auth');


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::resource('imagenes', App\Http\Controllers\ImagenesController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

