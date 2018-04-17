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
        $participants = User::select('nom_de_famille','prenom','email')
            ->join('participes', 'users.id', '=', 'participes.id_utilisateur')
            ->where('id_evenement', $id)
            ->get(['users.*']);
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($participants, ['nom_de_famille', 'prenom', 'email']);
        return $csvExporter->download('participants.csv');
    }
}
