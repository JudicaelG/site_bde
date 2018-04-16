<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'contenu',
        'id_utilisateur'
    ];
}