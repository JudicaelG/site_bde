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
                'lien' => '/img/crepes.jpg',
                'alt' => 'crepes',
                'id_evenement' => '3',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/crepelololol.jpg',
                'alt' => 'crepes nutella',
                'id_evenement' => '3',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/poloBDE.png',
                'alt' => 'poloBDE',
                'id_produit' => '1',
                'id_utilisateur' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/casquetteBDE.png',
                'alt' => 'casquetteBDE',
                'id_produit' => '2',
                'id_utilisateur' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/tacos_cest_bon.jpeg',
                'alt' => 'tacos',
                'id_evenement' => '4',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/casqueBDE.png',
                'alt' => 'casqueBDE',
                'id_produit' => '4',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/mugBDE.png',
                'alt' => 'mugBDE',
                'id_produit' => '3',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/ecouteursBDE.png',
                'alt' => 'ecouteursBDE',
                'id_produit' => '5',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/usbBDE.png',
                'alt' => 'usbBDE',
                'id_produit' => '6',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('images')->insert(
            [
                'lien' => '/img/handzimmerBDE.png',
                'alt' => 'handzimmerBDE',
                'id_produit' => '7',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
