<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorieProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_produits')->insert(
            [
                'nom' => 'Vêtement',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('categorie_produits')->insert(
            [
                'nom' => 'Goodies',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
