<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert(
            [
                'lien' => 'C:/dossier_bde/image/crepes.jpeg',
                'alt' => 'autre chemin',
                'id_evenement' => '3',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('image')->insert(
            [
                'lien' => 'C:/dossier_bde/image/crepelololol.jpeg',
                'alt' => 'autre chemin',
                'id_evenement' => '3',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('image')->insert(
            [
                'lien' => 'C:/dossier_bde/image/casquette.jpeg',
                'alt' => 'autre chemin',
                'id_produit' => '2',
                'id_utilisateur' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('image')->insert(
            [
                'lien' => 'C:/dossier_bde/image/tacos_cest_bon.jpeg',
                'alt' => 'autre chemin',
                'id_evenement' => '4',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

    }
}
