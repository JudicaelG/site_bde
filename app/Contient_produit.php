<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contient_produit extends Model
{
    /*
    Champs de saisi obligatoire à remplir
    */
    protected $fillable = [
      'quantite',
      'id_produit',
      'id_commande'
    ];
}
