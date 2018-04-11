<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BoiteIdeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boite_idees')->insert(
            [
                'titre' => 'After Work',
                'description' => 'Proposition d\'une soirée en semaine, aller au bar et participer au rapprochement inter-promotion',
                'date_idee' => '2018-03-09',
                'id_utilisateur' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('boite_idees')->insert(
            [
                'titre' => 'Chasse aux oeufs',
                'description' => 'Proposition d\'une chasse aux oeufs pour la semaine de Paques',
                'date_idee' => '2018-03-18',
                'id_utilisateur' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('boite_idees')->insert(
            [
                'titre' => 'Nouveaux produits ',
                'description' => 'Demande d\'ajout de nouveaux produits sur le site, comme des t-shirts avec plusieurs autres couleurs' ,
                'date_idee' => '2018-03-23',
                'id_utilisateur' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
