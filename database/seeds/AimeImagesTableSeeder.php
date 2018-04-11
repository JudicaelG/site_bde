<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AimeImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aime_images')->insert(
            [
                'id_image' => '1',
                'id_utilisateur' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_images')->insert(
            [
                'id_image' => '1',
                'id_utilisateur' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_images')->insert(
            [
                'id_image' => '1',
                'id_utilisateur' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_images')->insert(
            [
                'id_image' => '1',
                'id_utilisateur' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_images')->insert(
            [
                'id_image' => '2',
                'id_utilisateur' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_images')->insert(
            [
                'id_image' => '4',
                'id_utilisateur' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('aime_images')->insert(
            [
                'id_image' => '4',
                'id_utilisateur' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
