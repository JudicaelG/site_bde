<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produit')->insert(
            [
                'titre' => 'Polo BDE',
                'description' => 'Polo avec le logo du BDE Exia',
                'prix' => '12.50',
                'id_categorie' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produit')->insert(
            [
                'titre' => 'Casquette',
                'description' => 'Casquette avec le logo du BDE Exia',
                'prix' => '7.50',
                'id_categorie' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produit')->insert(
            [
                'titre' => 'Mug',
                'description' => 'Mug avec le logo du BDE Exia',
                'prix' => '10.50',
                'id_categorie' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
