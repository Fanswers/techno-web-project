<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Plat;

class PlatsController extends Controller
{
    public function new_plat(request $request)
    {
        $tempId = $request->id;

        request()->validate([
            'name' => ['required', 'max:255'],
            'image' => ['required'],
            'description' => ['required'],
            'price' => ['required']
        ]);

        Plat::create([
            'name' => request('name'),
            'image' => request('image'),
            'description' => request('description'),
            'price' => request('price'),
            'restaurant_id' => $tempId
        ]);

        return back();
    }

    public function affichage_plat(request $request)
    {
        $id = $request->id;
        $platDuRestaurant = Plat::all()->where('restaurant_id', $id);
        return view('restaurant', ['plat' => $platDuRestaurant]);
    }
}
