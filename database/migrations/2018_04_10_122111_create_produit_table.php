<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->increments('id_produit');
            $table->string('titre', 25);
            $table->text('description');
            $table->float('prix');
            $table->integer('id_categorie');
            $table->timestamps();
			
			$table->foreign('id_categorie')->references('id_categorie')->on('categorie_produit')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
