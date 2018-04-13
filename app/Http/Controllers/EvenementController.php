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
        $idee = new Boite_idee;
        $this->validate(request(),[
            'titre' => 'required',
            'description' => 'required'
        ]);
        $idee->titre = request('titre');
        $idee->description = request('description');
        $idee->date_idee = date('Y-m-d');
        $idee->id_utilisateur = \Auth::user()->id;
        $idee->save();
        return redirect('/boiteidee');
    }

    public function show($id)
    {
        $idee = Boite_idee::find($id);
        return view('boiteidee.show', compact('idee'));
    }

    public function edit($id)
    {
        $idee = Boite_idee::find($id);
        return view('boiteidee.edit', compact('idee'));
    }

    public function update(Request $request, $id)
    {
        $idee = Boite_idee::findOrFail($id);
        $idee->update($request->all());
        return redirect('boiteidee');
    }

    public function destroy($id)
    {
        $idee = Boite_idee::findOrFail($id);
        $idee->delete();
        return redirect('boiteidee');
    }
}
