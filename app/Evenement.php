<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'description',
        'titre',
        'id_utilisateur',
        'date_evenement',
        'prix',
        'recurrence'
    ];
}
