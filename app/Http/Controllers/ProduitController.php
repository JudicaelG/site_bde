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
		
		$meilleursproduits = DB::table('produits')
							->join('images', 'produits.id', '=', 'images.id_produit')
							->distinct()
							->join('contient_produits', 'produits.id', '=', 'contient_produits.id_produit')							
							->select('produits.titre', 'images.', 'contient_produits.id_produit', \DB::raw('count(*) as produit_count'))
							->groupBy('contient_produits.id_produit')							
							->get();
		
        return view('boutique.index')
				->with(compact('produits', $produits))
				->with(compact('meilleursproduits', $meilleursproduits));
		
		
			
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
