<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
       protected $fillable = [
        'titre',
        'description',
        'prix',
    ];
	
	public function images()
	{
		return $this->hasOne('App\Image', 'id_produit');
	}
}
