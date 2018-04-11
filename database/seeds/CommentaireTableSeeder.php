<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaire')->insert(
            [
                'contenu' => 'Aha, une journée mémorable',
                'id_utilisateur' => '3',
                'id_evenement' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('commentaire')->insert(
            [
                'contenu' => 'Encore merci à eux!!',
                'id_utilisateur' => '4',
                'id_evenement' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('commentaire')->insert(
            [
                'contenu' => 'Vous dites Manele ou Menele vous??',
                'id_utilisateur' => '4',
                'id_evenement' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('commentaire')->insert(
            [
                'contenu' => 'Toujours aussi bonnes, merci En\'K',
                'id_utilisateur' => '1',
                'id_image' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
