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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/profileUser', [App\Http\Controllers\ProfileController::class, 'affichageData']);

Route::get('/restaurantAdmin', function () {
    return view('restaurantAdmin');
});

Route::post('/new_restaurant', '\App\Http\Controllers\RestaurantsController@new_restaurant');

Route::post('/new_plat', '\App\Http\Controllers\PlatsController@new_plat');

Route::post('/modifyRestaurant', '\App\Http\Controllers\RestaurantsController@modify_restaurant');

Route::post('/profileUser', '\App\Http\Controllers\RestaurantsController@new_restaurant');

Route::get('/deleteRestaurant', '\App\Http\Controllers\RestaurantsController@delete_restaurant');

Route::get('/restaurantAdmin', '\App\Http\Controllers\RestaurantsController@restaurantAdmin');

Route::get('/restaurantAdminModify', '\App\Http\Controllers\RestaurantsController@restaurant_admin');

Route::get('/restaurantUser', '\App\Http\Controllers\RestaurantsController@restaurant_user');

Route::get('/platAdmin', '\App\Http\Controllers\PlatsController@plat_admin');

Route::get('/deletePlat', '\App\Http\Controllers\PlatsController@delete_plat');

Route::post('/modifyPlat', '\App\Http\Controllers\PlatsController@modify_plat');

Route::get('/restaurant', '\App\Http\Controllers\PlatsController@affichage_plat');

Route::get('/userAdminModify', '\App\Http\Controllers\UserController@user_admin');

Route::post('/modifyUser', '\App\Http\Controllers\UserController@modify_userAdmin');

Route::get('/userModify', '\App\Http\Controllers\UserController@user');

Route::post('/modifyActualUser', '\App\Http\Controllers\UserController@modify_user');

Route::get('/deleteUser', '\App\Http\Controllers\UserController@delete_user');

Route::get('/undoCommande', '\App\Http\Controllers\CommandesController@undo_commande');

Route::get('/newPlatCommande', '\App\Http\Controllers\PlatCommandesController@new_plat_commande');
