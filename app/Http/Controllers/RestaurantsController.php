<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Restaurant as Restaurant;


class RestaurantsController extends Controller
{
    public function new_restaurant()
    {
        request()->validate([
            'name' => ['required'],
            'image' => ['required'],
            'addresse' => ['required'],
        ]);

        Restaurant::create([
            'name' => request('name'),
            'image' => request('image'),
            'addresse' => request('addresse'),
            'user_id' => auth()->id()
        ]);
        return back();
    }

    public function affichageRestaurant()
    {
        $restaurantUser = Restaurant::all();
        return view('profileUser', ['restaurant' => $restaurantUser]);
    }
}
