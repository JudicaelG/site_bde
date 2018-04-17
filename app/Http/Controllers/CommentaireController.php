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

    public function addCommentaire($id)
    {
        $commentaire = new Commentaire();
        $commentaire->contenu= request('contenu');
        $commentaire->id_utilisateur= \Auth::user()->id;
        $commentaire->created_at =now();
        $commentaire->id_evenement= $id;
        $commentaire-> save();
        return back();
    }
    public function addCommentaireImg($id)
    {
        $commentaire = new Commentaire();
        $commentaire->contenu= request('contenu');
        $commentaire->id_utilisateur= \Auth::user()->id;
        $commentaire->created_at =now();
        $commentaire-> id_image= $id;
        $commentaire-> save();
        return back();
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
