<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participe extends Model
{
    protected $fillable = [
        'id_evenement',
        'id_utilisateur'
    ];
}
