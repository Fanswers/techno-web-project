<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Restaurant as Restaurant;


class RestaurantsController extends Controller
{
    public function new_restaurant()
    {
        request()->validate([
            'name' => ['required', 'max:255'],
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

    public function modify_restaurant()
    {
        $tempid = 1;

        $restaurant = Restaurant::find($tempid);
        $restaurant->update([
            'name' => request('name'),
            'image' => request('image'),
            'addresse' => request('addresse'),
        ]);
        return back();
    }

    public function delete_restaurant(request $request)
    {
        $id = $request->id;
        
        Restaurant::where('id', $id)->delete();

        return back();
    }

    public function affichageRestaurant()
    {
        $restaurantUser = Restaurant::all();
        return view('profileUser', ['restaurant' => $restaurantUser]);
    }
}
