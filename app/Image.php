<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
        protected $fillable = [
            'alt',
            'id_utilisateur'
        ];

}