<?php

namespace App\Http\Controllers;

use App\Aime_evenement;
use App\Commentaire;
use App\Evenement;
use App\Image;
use App\Participe;
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
        $evenements = Evenement::find($id);
        $commentaires = Commentaire::where('id_evenement', $id)->get();
        $imageActive = Image::where('id_evenement', $id)->first();
        $images = Image::where('id_evenement', $id)->get();
        $dateDuJour = new \DateTime("now");
        $date = $dateDuJour->format("Y-m-d");
        if (\Auth::check()){
            $participes = Participe::where('id_evenement', $id)->where('id_utilisateur', \Auth::user()->id)->first();
            $aimeEvenement = Aime_evenement::where('id_evenement', $id)->where('id_utilisateur', \Auth::user()->id)->first();
        }

        return view('evenement.show')
            ->with(compact('evenements'))
            ->with(compact('commentaires'))
            ->with(compact('imageActive'))
            ->with(compact('images'))
            ->with(compact('date'))
            ->with(compact('participes'))
            ->with(compact('aimeEvenement'));
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
