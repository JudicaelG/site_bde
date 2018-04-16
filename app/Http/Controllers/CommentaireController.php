<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentaireController extends Controller
{
    public function index()
    {
        $commentaire = Commentaire::get();
        return view('evenement.index', compact('evenements',$commentaire));

    }

    public function create()
    {

    }

    public function addCommentaire()
    {
        $commentaire = new Commentaire();
        $commentaire->contenu= request('contenu');
        $commentaire->id_utilisateur= request(1);
        $commentaire-> save();
        return back();
      /* Auth::user()->id*/

       /*Commentaire::create([
           'contenu' => request('contenu'),
           'id_utilisateur' => $commentaire->id
       ]);
       return back();*/
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
