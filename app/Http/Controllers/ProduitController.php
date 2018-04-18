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
		$meilleurventes = DB::table('contient_produits')
							->select(DB::raw("COUNT(contient_produits.id_produit) as nombre"))
							->join('produits', 'contient_produits.id_produit', '=', 'produits.id')
							->join('images', 'produits.id', '=', "images.id_produit")
							->where('produits.id', '=', 'contient_produits.id_produit')
							->groupBy(DB::raw("contient_produits.id_produit"))
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
