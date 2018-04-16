<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EvenementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evenements')->insert(
            [
                'titre' => 'Don du sang',
                'description' => 'Les intervants de l\'Etablissement Français du Sang viendront à l\'Exia pour une collecte sur le campus',
                'date_evenement' => '2018-05-10',
                'prix' => '0',
                'recurrence' => 'Mensuellement',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('evenements')->insert(
            [
                'titre' => 'Distribution Maneuleuh',
                'description' => 'Une distribution de Maneuleuh a eu lieu comme chaque année',
                'date_evenement' => '2017-12-05',
                'prix' => '0',
                'recurrence' => 'Annuellement',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('evenements')->insert(
            [
                'titre' => 'Chandeleur',
                'description' => 'Une vente de crèpes à l\'unité a eu lieu pour la chandeleur',
                'date_evenement' => '2018-02-01',
                'prix' => '1.50',
                'recurrence' => 'Annuuellement',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('evenements')->insert(
            [
                'titre' => 'Tacos',
                'description' => 'Une vente de Tacos a lieu comme chaque semaine par En`\'K',
                'date_evenement' => '2018-02-16',
                'prix' => '5.0',
                'recurrence' => 'Hebdomadaire',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('evenements')->insert(
            [
                'titre' => 'Pizza',
                'description' => 'Une vente de Pizza a lieu comme chaque semaine par En`\'K',
                'date_evenement' => '2018-02-20',
                'prix' => '6.50',
                'recurrence' => 'Hebdomadaire',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
