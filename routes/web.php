<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/profileUser', function(){
    return view('profileUser');
});

Route::get('/restaurant', function(){
    return view('restaurant');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/new_restaurant', '\App\Http\Controllers\RestaurantsController@new_restaurant');

Route::post('/new_plat', '\App\Http\Controllers\PlatsController@new_plat');