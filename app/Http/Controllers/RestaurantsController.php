<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantsController extends Controller
{
    public function new_restaurant () {
        request()->validate([
            'name' => ['required'],
            'image' => ['required'],
            'addresse' => ['required'],
        ]);

        Restaurant::create ([
            'name' => request('name'),
            'image' => request('image'),
            'addresse' => request('addresse'),
            'user_id' => auth()->id()
        ]);
    }
}
