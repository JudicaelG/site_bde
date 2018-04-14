<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Comment;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::get();
        $dateDuJour = new \DateTime("now");
        $date = $dateDuJour->format("Y-m-d");
        return view('evenement.index', compact('evenements',$evenements), compact('date', $date));
    }

    public function create()
    {
        return view('evenement.create');
    }

    public function store()
    {
        $evenements = new Evenement();
        $commentaires = new Commentaire();
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

        $commentaires->contenu= request('contenu');
        $commentaires->id_utilisateur= \Auth::user()->id;
        $commentaires-> save();

        return redirect('/evenement');
    }

    public function show($id)
    {
        $evenements = Evenement::find($id);
        $commentaires = Commentaire::where('id_evenement', $id)->get();
        return view('evenement.show', compact('evenements'), compact('commentaires'));
    }

    public function edit($id)
    {
        $evenements = Evenement::find($id);
        return view('evenement.edit', compact('evenements'));
    }

    public function update(Request $request, $id)
    {
        $evenements = Evenement::findOrFail($id);
        $evenements->update($request->all());
        return redirect('evenement');
    }

    public function destroy($id)
    {
        $evenements = Evenement::findOrFail($id);
        $evenements->delete();
        return redirect('evenement');
    }
}
