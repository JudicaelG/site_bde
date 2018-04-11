<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AimeEvenementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aime_evenements')->insert(
            [
                'id_evenement' => '1',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenements')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenements')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenements')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenements')->insert(
            [
                'id_evenement' => '3',
                'id_utilisateur' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
