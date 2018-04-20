<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    /*
    Champs de saisi obligatoire à remplir
    */
    protected $fillable = [
        'prix_total',
        'date_commande',
        'etat_commande',
        'id_utilisateur'
    ];
}
