<?php

namespace App\Http\Controllers;

use App\Aime_idee;
use App\Boite_idee;
use App\Evenement;
use App\Mail\ValidationEmail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BoiteideeController extends Controller
{
    public function index()
    {
        $idees = Boite_idee::get();
        return view('boiteidee.index', compact('idees',$idees));
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
        if (\Auth::check()){
            $aimeIdee = Aime_idee::where('id_boite_idee', $id)->where('id_utilisateur', \Auth::user()->id)->first();
        }
        return view('boiteidee.show', compact('idee'), compact('aimeIdee'));
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


 public function validation($id)
    {
        $evenement = new Evenement();
        $idee = Boite_idee::findOrFail($id);
        $evenement->titre = $idee->titre;
        $evenement->description = $idee->description;
        $evenement->id_utilisateur = \Auth::user()->id;
        $evenement->save();
        $email = User::select('email')
            ->where('id', $idee->id_utilisateur)
            ->first();
        $idEvenement = Evenement::orderBy('created_at', 'desc')->where('id_utilisateur', \Auth::user()->id)->first()->id;


        \Mail::to($email)->send(new ValidationEmail($idee));
        $idee->delete();
        return redirect('evenement/'.$idEvenement.'/edit');

    }


}
