<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Contient_produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Image;
use App\Categorie_produit;

class ProduitController extends Controller
{
    public function index()
    {
		$produits = DB::table('produits')
					->join('images', 'produits.id', '=', 'images.id_produit')
					->join('categorie_produits', 'produits.id_categorie', '=', 'categorie_produits.id')
					->get();
		
		$meilleursproduits = DB::table('produits')
							->distinct()
							->join('images', 'produits.id', '=', 'images.id_produit')							
							->join('contient_produits', 'produits.id', '=', 'contient_produits.id_produit')							
							->select('produits.id','produits.titre', 'images.lien', 'images.alt', \DB::raw('count(contient_produits.id_produit) as produit_count'))
							->groupBy('contient_produits.id_produit')
							//->where('produit_count', '>', 1)
							->get();
		
        return view('boutique.index')
				->with(compact('produits', $produits))
				->with(compact('meilleursproduits', $meilleursproduits));
		
		
			
    }

    public function create(){
        $categories = Categorie_produit::get();
        return view('boutique.create', compact('categories'));
    }

    public function ajouterProduit(){

        $produit = new Produit();
        $this->validate(request(),[
            'titre' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'id_categorie' => 'requiered'
        ]);
        $produit->titre = request('titre');
        $produit->description = request('description');
        $produit->prix = request('prix');

        $nomCategorie = request('categorie');
        $idCategorie = Categorie_produit::select('id')
                ->where('nom', $nomCategorie)
                ->first();

        $produit->id_categorie = $idCategorie->id;
        $produit->save();

        return redirect('/boutique');

    }

	public function show($id)
	{
		$produits = Produit::find($id);
		$images = Image::where('id_produit', $id)->first();
		
		return view('boutique.show')
			->with(compact('produits'))
			->with(compact('images'));
	}

	public function store()
    {
        $commande = Commande::select('id','id_utilisateur','prix_total','date_commande','etat_commande','id_utilisateur')
            ->where('id_utilisateur', \Auth::user()->id)
            ->where('etat_commande', 'En commande')
            ->first();

        if (is_null($commande)===false)
        {
            /*Ajouter les produits*/
            $quantite = request('quantite');
            $idProduit = request('id_produit');
            $prixProduit = Produit::select('prix')
                ->find($idProduit);

            $prixCommande = $commande->prix_total + $prixProduit->prix * $quantite;
            $commande->prix_total = $prixCommande;
            $date = new \DateTime("now");
            $dateDuJour = $date->format("Y-m-d");
            $commande->date_commande = $dateDuJour;
            //$nouvelleCommande->id_utilisateur = \Auth::user()->id;
            $commande->save();

            $contientProduits = new Contient_produit();
            $contientProduits->quantite = request('quantite');
            $contientProduits->id_produit = request('id_produit');
            $contientProduits->id_commande = $commande->id;
            $contientProduits->save();
        }

        if (is_null($commande)===true)
        {
            /*Creér la commande*/
            $quantite = request('quantite');
            $idProduit = request('id_produit');
            $prixProduit = Produit::select('prix')
                ->find($idProduit);

            $prixCommande = $prixProduit->prix * $quantite;
            $nouvelleCommande = new Commande();
            $nouvelleCommande->prix_total = $prixCommande;
            $date = new \DateTime("now");
            $dateDuJour = $date->format("Y-m-d");
            $nouvelleCommande->date_commande = $dateDuJour;
            $nouvelleCommande->etat_commande = "En commande";
            $nouvelleCommande->id_utilisateur = \Auth::user()->id;
            $nouvelleCommande->save();

            $nouvelleCommandeId = Commande::
            where('id_utilisateur', \Auth::user()->id)
                ->where('etat_commande', 'En commande')
                ->first();

            $contientProduits = new Contient_produit();
            $contientProduits->quantite = request('quantite');
            $contientProduits->id_produit = request('id_produit');
            $contientProduits->id_commande = $nouvelleCommandeId->id;
            $contientProduits->save();
        }
        return back();
    }
}


