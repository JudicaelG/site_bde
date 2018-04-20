<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    /*
    Champs de saisi obligatoire à remplir
    */
       protected $fillable = [
        'titre',
        'description',
        'prix',
    ];
	
}
