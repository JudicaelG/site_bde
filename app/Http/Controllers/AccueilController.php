<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evenement;
use App\Boite_idee;

class AccueilController extends Controller
{
    public function index()
    {
        $evenements = Evenement::get();
        $dateDuJour = new \DateTime("now");
        $date = $dateDuJour->format("Y-m-d");
        $idees = Boite_idee::get();
        return view('accueil.index')
            ->with(compact('evenements',$evenements))
            ->with(compact('idees',$idees))
            ->with(compact('date', $date));
    }
}
