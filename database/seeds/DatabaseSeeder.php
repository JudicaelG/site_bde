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
        $this->call(StatutsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BoiteIdeesTableSeeder::class);
        $this->call(AimeIdeesTableSeeder::class);
        $this->call(CategorieProduitsTableSeeder::class);
        $this->call(ProduitsTableSeeder::class);
        $this->call(EvenementsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(CommentairesTableSeeder::class);
        $this->call(ParticipesTableSeeder::class);
        $this->call(AimeEvenementsTableSeeder::class);
        $this->call(AimeImagesTableSeeder::class);
        $this->call(CommandesTableSeeder::class);
        $this->call(ContientProduitsTableSeeder::class);
    }
}
