<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id')->autoIncrement();
            $table->string('lien',100);
            $table->string('alt', 50);
            $table->integer('id_evenement')->nullable();
            $table->integer('id_produit')->nullable();
            $table->integer('id_utilisateur');
            $table->timestamps();
			
			$table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
			$table->foreign('id_evenement')->references('id')->on('evenements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
