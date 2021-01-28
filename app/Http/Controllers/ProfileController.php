<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Restaurant as Restaurant;

class ProfileController extends Controller
{
    //
    public function affichageRestaurant()
    {
        $user = User::all();
        $restaurantUser = Restaurant::all()->where('user_id', auth()->id());
        $restaurantAdmin = Restaurant::all();
        return view('profileUser', [
            'restaurant' => $restaurantUser,
            'user' => $user,
            'restaurantAdmin' => $restaurantAdmin
        ]);
    }
}
