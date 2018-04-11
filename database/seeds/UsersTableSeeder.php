<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Otila',
                'prenom' => 'Caroline',
                'email' => 'caroline.otila@viacesi.fr',
                'password' => 'Ctila1',
                'id_statut' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Peng',
                'prenom' => 'Olivier',
                'email' => 'olivier.peng@viacesi.fr',
                'password' => 'Oeng1',
                'id_statut' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Meyer',
                'prenom' => 'Michel',
                'email' => 'michel.meyer@viacesi.fr',
                'password' => 'Meyer1',
                'id_statut' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Najjar',
                'prenom' => 'Margot',
                'email' => 'margot.najjar@viacesi.fr',
                'password' => 'Majjar1',
                'id_statut' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Chubb',
                'prenom' => 'Ernest',
                'email' => 'ernest.chubb@viacesi.fr',
                'password' => 'Ehubb1',
                'id_statut' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Cinepresa',
                'prenom' => 'Nicolas',
                'email' => 'nicolas.cinepresa@viacesi.fr',
                'password' => 'Ninepresa1',
                'id_statut' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Powell',
                'prenom' => 'Thibaut',
                'email' => 'thibaut.powell@viacesi.fr',
                'password' => 'Towell1',
                'id_statut' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
