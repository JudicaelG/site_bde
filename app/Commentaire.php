<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    /*
    Champs de saisi obligatoire à remplir
    */
    public $timestamps = false;
    protected $fillable = [
        'contenu',
        'id_utilisateur',
        'id_evenement'
    ];
}