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

    public function store()
    {
        $commentaire = Commentaire();
        $commentaire->contenu= request('contenu');
        $commentaire->id_utilisateur= request('1');
        $commentaire-> save();
        return redirect('/evenement.{id}');
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
