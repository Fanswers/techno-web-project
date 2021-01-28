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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/profileUser', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/restaurantAdmin', function () {
    return view('restaurantAdmin');
});

Route::post('/new_restaurant', '\App\Http\Controllers\RestaurantsController@new_restaurant');

Route::post('/new_plat', '\App\Http\Controllers\PlatsController@new_plat');

Route::post('/modify_restaurant', '\App\Http\Controllers\RestaurantsController@modify_restaurant');

Route::post('/profileUser', '\App\Http\Controllers\RestaurantsController@new_restaurant');

Route::get('/profileUser', '\App\Http\Controllers\RestaurantsController@affichageRestaurant');

Route::get('/deleteRestaurant', '\App\Http\Controllers\RestaurantsController@delete_restaurant');
Route::get('/restaurantAdmin', '\App\Http\Controllers\RestaurantsController@restaurantAdmin');
