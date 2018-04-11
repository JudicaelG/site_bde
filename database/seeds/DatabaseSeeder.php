<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatutTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BoiteIdeeTableSeeder::class);
        $this->call(AimeIdeeTableSeeder::class);
        $this->call(CategorieProduitTableSeeder::class);
        $this->call(ProduitTableSeeder::class);

        $this->call(EvenementTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
