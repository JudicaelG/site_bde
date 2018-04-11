<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContientProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contient_produit', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('quantite');
            $table->integer('id_produit')->primary;
            $table->integer('id_commande')->primary;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contient_produit');
    }
}
