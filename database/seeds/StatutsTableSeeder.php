<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->insert(
		[
			'statut' => 'Etudiant',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		
		DB::table('statuts')->insert(
		[
			'statut' => 'Salarie',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('statuts')->insert(
		[
			'statut' => 'BDE',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
    }
}
