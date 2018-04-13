<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('boiteidee.create');
    }

    public function store()
    {
        $evenements = new Evenement();
        $this->validate(request(),[
            'titre' => 'required',
            'description' => 'required'
        ]);
        $evenements->titre = request('titre');
        $evenements->description = request('description');
        $evenements->id_utilisateur = \Auth::user()->id;
        $evenements->save();
        return redirect('/evenement');
    }

    public function show($id)
    {
        $evenements = Evenement::find($id);
        return view('evenement.show', compact('evenements'));
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
        return redirect('c');
    }

    public function destroy($id)
    {
        $evenements = Evenement::findOrFail($id);
        $evenements->delete();
        return redirect('evenements');
    }
}
