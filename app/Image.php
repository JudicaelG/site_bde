<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    /*
    Champs de saisi obligatoire à remplir
    */
        protected $fillable = [
            'alt',
            'id_utilisateur'
        ];

}