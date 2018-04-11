<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_image')->autoIncrement();
            $table->text('lien');
            $table->string('alt', 25);
            $table->integer('id_evenement');
            $table->integer('id_produit');
            $table->integer('id_utilisateur');
            $table->timestamps();
			
			$table->foreign('id_utilisateur')->references('id_utilisateur')->on('users')->onDelete('cascade');
			$table->foreign('id_produit')->references('id_produit')->on('produit')->onDelete('cascade');
			$table->foreign('id_evenement')->references('id_evenement')->on('evenement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image');
    }
}
