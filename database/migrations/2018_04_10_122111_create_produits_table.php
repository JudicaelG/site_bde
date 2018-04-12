<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id')->autoIncrement();
            $table->string('titre', 25);
            $table->text('description');
            $table->float('prix');
            $table->integer('id_categorie');
            $table->timestamps();
			
			$table->foreign('id_categorie')->references('id')->on('categorie_produits')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
