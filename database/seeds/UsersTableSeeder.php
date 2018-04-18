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
                'nom_de_famille' => 'Tututu',
                'prenom' => 'Florian',
                'email' => 'florian.tututu@viacesi.fr',
                'password' => 'Fututu1',
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
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Oliech',
                'prenom' => 'Pierre',
                'email' => 'etudiant.etudiant@viacesi.fr',
                'password' => '$2y$10$WD2fKNSLR6vYKXoSTwksL.sQ7D3AZ8e.2XtsvuazE/OgAflYxyXcC',
                'id_statut' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Pavel',
                'prenom' => 'Jean',
                'email' => 'salarie.salarie@viacesi.fr',
                'password' => '$2y$10$UqUuMUVNtOEhwH0Ywh33IeYmrIO.PJn0E3Tul4GhMdp/2JL2tsKqi',
                'id_statut' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('users')->insert(
            [
                'nom_de_famille' => 'Torlk',
                'prenom' => 'Benjamin',
                'email' => 'bde.bde@viacesi.fr',
                'password' => '$2y$10$l5Br9pVpiho55L0.on2xdeJqIqrRQrJHfJfDk0VVwBynr0ZpbZU/S',
                'id_statut' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
