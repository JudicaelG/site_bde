<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_commande')->autoIncrement();
            $table->float('prix_total');
            $table->date('date_commande');
            $table->integer('id_utilisateur');
            $table->timestamps();
			
			$table->foreign('id_utilisateur')->references('id_utilisateur')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande');
    }
}
