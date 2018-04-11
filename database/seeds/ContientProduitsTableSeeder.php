<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContientProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contient_produits')->insert(
            [
                'quantite' => '1',
                'id_produit' => '1',
                'id_commande' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('contient_produits')->insert(
            [
                'quantite' => '1',
                'id_produit' => '2',
                'id_commande' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('contient_produits')->insert(
            [
                'quantite' => '3',
                'id_produit' => '2',
                'id_commande' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('contient_produits')->insert(
            [
                'quantite' => '2',
                'id_produit' => '1',
                'id_commande' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
