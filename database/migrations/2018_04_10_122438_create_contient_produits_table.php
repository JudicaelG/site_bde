<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContientProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contient_produits', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('quantite');
            $table->integer('id_produit')->primary;
            $table->integer('id_commande')->primary;
            $table->timestamps();
			
			$table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
			$table->foreign('id_commande')->references('id')->on('commandes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contient_produits');
    }
}
