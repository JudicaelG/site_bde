<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boite_idee extends Model
{
        public $timestamps = false;
        protected $fillable = [
            'description',
            'titre',
            'id_utilisateur'
        ];
}
