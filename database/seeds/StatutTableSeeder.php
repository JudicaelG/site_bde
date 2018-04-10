<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statut')->insert(
		[
			'statut' => 'Etudiant',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		
		DB::table('statut')->insert(
		[
			'statut' => 'Salarie',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('statut')->insert(
		[
			'statut' => 'BDE',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
    }
}
