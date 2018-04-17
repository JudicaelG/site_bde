<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CSVController extends Controller
{
    public function csv($id)
    {

        $participants = DB::table('users')
            ->join('participes', 'users.id', '=', 'participes.id_utilisateur')
            ->where('id_evenement', $id)
            ->get();


        //$participants = User::get();
        //echo $participants;
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($participants, ['nom_de_famille', 'prenom', 'email']);
        //$csv = $csvExporter->getCsv();
        //echo $csv;
        return $csvExporter->download('participants.csv');
    }
}
