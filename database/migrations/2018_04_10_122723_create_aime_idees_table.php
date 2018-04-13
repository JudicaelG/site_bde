<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAimeIdeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aime_idees', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_utilisateur')->primary;
            $table->integer('id_boite_idee')->primary;
            $table->timestamps();
			
			$table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('id_boite_idee')->references('id')->on('boite_idees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aime_idees');
    }
}
