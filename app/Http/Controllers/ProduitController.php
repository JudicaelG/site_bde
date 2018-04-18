<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Image;

class ProduitController extends Controller
{
    public function index()
    {
		$produits = DB::table('produits')
					->join('images', 'produits.id', '=', 'images.id_produit')
					->join('categorie_produits', 'produits.id_categorie', '=', 'categorie_produits.id')
					->get();
		$meilleurventes = DB::table('produits')
							->distinct('contient_produits.id_produit')
							->select(DB::raw("COUNT('contient_produits.id_produit') AS nombre"))
							->join('contient_produits', 'produits.id', '=', 'contient_produits.id_produit')
							->join('images', 'produits.id', '=', "images.id_produit")
							->groupBy('contient_produits.id_produit')
							->where('contient_produits.id_produit', '=', 'produits.id')							
							->get();
		
        return view('boutique.index')
				->with(compact('produits', $produits))
				->with(compact('meilleurventes', $meilleurventes));
		
		
			
    }
	
	public function show($id)
	{
		$produits = Produit::find($id);
		$images = Image::where('id_produit', $id)->first();
		
		return view('boutique.show')
			->with(compact('produits'))
			->with(compact('images'));
	}
}
