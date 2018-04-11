<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                'lien' => 'C:/dossier_bde/images/crepes.jpeg',
                'alt' => 'autre chemin',
                'id_evenement' => '3',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => 'C:/dossier_bde/images/crepelololol.jpeg',
                'alt' => 'autre chemin',
                'id_evenement' => '3',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => 'C:/dossier_bde/images/casquette.jpeg',
                'alt' => 'autre chemin',
                'id_produit' => '2',
                'id_utilisateur' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => 'C:/dossier_bde/images/tacos_cest_bon.jpeg',
                'alt' => 'autre chemin',
                'id_evenement' => '4',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

    }
}
