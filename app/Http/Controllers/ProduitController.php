<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Image;

class ProduitController extends Controller
{
    public function index()
    {
		$produits = Produit::get();
		//$images = Image::find(1)->produit;
        return view('boutique.index')
				->with(compact('produits', $produits));
				//->with(compact('images', $images));
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
