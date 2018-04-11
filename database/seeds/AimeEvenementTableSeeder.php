<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AimeEvenementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aime_evenement')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenement')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenement')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenement')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_evenement')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
