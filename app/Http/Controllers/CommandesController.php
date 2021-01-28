<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Restaurant;

class CommandesController extends Controller
{
    public function undo_commande(){
        Commande::all()->where('user_id', auth()->id())->sortByDesc('created_at')->first()->delete();

        $restaurant = Restaurant::all();
        return view('home', ['restaurant' => $restaurant]);
    }

    
}
