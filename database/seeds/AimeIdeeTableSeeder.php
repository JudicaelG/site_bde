<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AimeIdeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '1',
                'id_boite_idee' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '1',
                'id_boite_idee' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '2',
                'id_boite_idee' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '2',
                'id_boite_idee' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '5',
                'id_boite_idee' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '6',
                'id_boite_idee' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '7',
                'id_boite_idee' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_idee')->insert(
            [
                'id_utilisateur' => '7',
                'id_boite_idee' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
