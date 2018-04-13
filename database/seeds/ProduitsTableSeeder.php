<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert(
            [
                'titre' => 'Polo BDE', //1
                'description' => 'Polo avec le logo du BDE Exia',
                'prix' => '12.50',
                'id_categorie' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produits')->insert(
            [
                'titre' => 'Casquette', //2
                'description' => 'Casquette avec le logo du BDE Exia',
                'prix' => '7.50',
                'id_categorie' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produits')->insert(
        [
            'titre' => 'Mug', //3
            'description' => 'Mug avec le logo du BDE Exia',
            'prix' => '10.50',
            'id_categorie' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('produits')->insert(
            [
                'titre' => 'Casque', //4
                'description' => 'Casque audio Bluetooth avec le logo du BDE Exia',
                'prix' => '35.00',
                'id_categorie' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produits')->insert(
            [
                'titre' => 'Ecouteurs', //5
                'description' => 'Ecouteurs avec le logo du BDE Exia',
                'prix' => '25.00',
                'id_categorie' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produits')->insert(
            [
                'titre' => 'Clé USB', //6
                'description' => 'Clé USB 16Go avec le logo du BDE Exia',
                'prix' => '15.00',
                'id_categorie' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('produits')->insert(
            [
                'titre' => 'Hand Spinner', //7
                'description' => 'Hand Spinner avec le logo du BDE Exia',
                'prix' => '2.00',
                'id_categorie' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
