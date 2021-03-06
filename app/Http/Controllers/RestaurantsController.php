<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Restaurant as Restaurant;
use App\Models\Plat as Plat;


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

    public function modify_restaurant(request $request)
    {
        $id = $request->id;
        $restaurant = Restaurant::find($id);
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



    public function restaurantAdmin(request $request)
    {
        $id = $request->id;
        $monRestaurant = Restaurant::find($id);
        $platDuRestaurant = Plat::all()->where('restaurant_id', $id);
        return view('restaurantAdmin', [
            'monRestaurant' => $monRestaurant,
            'plat' => $platDuRestaurant
        ]);
    }

    public function restaurant_admin(request $request)
    {
        $id = $request->id;
        $restaurant = Restaurant::find($id);
        return view('restaurantAdminModify', ['restaurant' => $restaurant]);
    }
}
