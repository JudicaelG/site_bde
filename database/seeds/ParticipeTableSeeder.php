<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ParticipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participe')->insert(
            [
                'id_evenement' => '1',
                'id_utilisateur' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('participe')->insert(
            [
                'id_evenement' => '1',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('participe')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('participe')->insert(
            [
                'id_evenement' => '2',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('participe')->insert(
            [
                'id_evenement' => '4',
                'id_utilisateur' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('participe')->insert(
            [
                'id_evenement' => '3',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
