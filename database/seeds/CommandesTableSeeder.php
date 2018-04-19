<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commandes')->insert(
            [
                'prix_total' => '20.00',
                'date_commande' => '2018-04-10',
                'etat_commande' => 'En commande',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('commandes')->insert(
            [
                'prix_total' => '22.50',
                'date_commande' => '2018-04-01',
                'etat_commande' => 'Valide',
                'id_utilisateur' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('commandes')->insert(
            [
                'prix_total' => '25.00',
                'date_commande' => '2018-03-15',
                'etat_commande' => 'Passe',
                'id_utilisateur' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

    }
}
