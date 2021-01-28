<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plat;
use App\Models\Commande;
use App\Models\PlatCommande;

class platCommandesController extends Controller
{
    public function new_plat_commande(request $request)
    {
        $id = $request->id;
        $id_commande = Commande::all()->where('user_id', auth()->id())->sortByDesc('created_at')->first();
        $platDuRestaurant = Plat::where('id', $id);

        PlatCommande::create([
            'name' => request($platDuRestaurant->$name),
            'image' => request($platDuRestaurant->$image),
            'description' => request($platDuRestaurant->$description),
            'price' => request($platDuRestaurant->$price),
            'restaurant_id' => $id,
            'commande_id' => $id_commande,
        ]);

        return back();
    }
}
