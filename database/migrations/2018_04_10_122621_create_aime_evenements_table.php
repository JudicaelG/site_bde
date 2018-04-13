<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAimeEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aime_evenements', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_evenement')->primary;
            $table->integer('id_utilisateur')->primary;
            $table->timestamps();
			
			$table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('aime_evenements');
    }
}
