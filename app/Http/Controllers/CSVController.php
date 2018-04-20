<?php

namespace App\Http\Controllers;

use App\Participe;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CSVController extends Controller
{
    public function csv($id)
    {
        /*
         * On recupere la liste des participants qui participent a des events en faisant une jointure entre la table users et participes
         * Puis on crée au  format csv la liste des participants
         */
        $participants = User::select('nom_de_famille','prenom','email')
            ->join('participes', 'users.id', '=', 'participes.id_utilisateur')
            ->where('id_evenement', $id)
            ->get(['users.*']);
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($participants, ['nom_de_famille', 'prenom', 'email']);
        return $csvExporter->download('participants.csv');
    }
}
