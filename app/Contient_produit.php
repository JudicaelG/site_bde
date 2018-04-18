<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contient_produit extends Model
{
    protected $fillable = [
      'quantite',
      'id_produit',
      'id_commande'
    ];
}
