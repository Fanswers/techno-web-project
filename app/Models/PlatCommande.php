<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatCommande extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','description', 'price','restaurant_id', 'commande_id'];
}
