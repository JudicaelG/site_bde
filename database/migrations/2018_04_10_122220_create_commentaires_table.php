<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id')->autoIncrement();
            $table->text('contenu');
            $table->integer('id_evenement')->nullable();
            $table->integer('id_utilisateur');
            $table->integer('id_image')->nullable();
            $table->timestamps();
			
			$table->foreign('id_evenement')->references('id')->on('evenements')->onDelete('cascade');
			$table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('id_image')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
