<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Plat;

class PlatsController extends Controller
{
    public function new_plat () {
        $tempId = 1;

        request()->validate([
            'name' => ['required', 'max:255'],
            'image' => ['required'],
            'description' => ['required'],
            'price' => ['required']
        ]);

        Plat::create ([
            'name' => request('name'),
            'image' => request('image'),
            'description' => request('description'),
            'price' => request('price'),
            'restaurant_id' => $tempId
        ]);

        return back();
    }
}
