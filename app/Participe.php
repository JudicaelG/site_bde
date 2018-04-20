<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participe extends Model
{

    /*
    Champs de saisi obligatoire à remplir
    */
    protected $fillable = [
        'id_evenement',
        'id_utilisateur'
    ];
}
