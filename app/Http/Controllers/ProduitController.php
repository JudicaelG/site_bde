<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Contient_produit;
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

    public function create(){
        return view('boutique.create');
    }

    public function ajouterProduit(){

        $produit = new Evenement();
        $this->validate(request(),[
            'titre' => 'required',
            'description' => 'required',
            'date_evenement' => 'required',
            'prix' => 'required',
            'recurrence' => 'required',
        ]);
        $evenements->titre = request('titre');
        $evenements->description = request('description');
        $evenements->date_evenement = request('date_evenement');
        $evenements->prix = request('prix');
        $evenements->recurrence = request('recurrence');
        $evenements->id_utilisateur = \Auth::user()->id;
        $evenements->save();

        return redirect('/evenement');

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


