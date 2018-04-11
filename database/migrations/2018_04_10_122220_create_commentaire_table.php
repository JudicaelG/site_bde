<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_commentaire')->autoIncrement();
            $table->text('contenu');
            $table->integer('id_evenement');
            $table->integer('id_utilisateur');
            $table->integer('id_image');
            $table->timestamps();
			
			$table->foreign('id_evenement')->references('id_evenement')->on('evenement')->onDelete('cascade');
			$table->foreign('id_utilisateur')->references('id_utilisateur')->on('users')->onDelete('cascade');
			$table->foreign('id_image')->references('id_image')->on('image')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaire');
    }
}
