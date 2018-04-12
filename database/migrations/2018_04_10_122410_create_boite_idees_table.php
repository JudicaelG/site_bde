<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoiteIdeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boite_idees', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id')->autoIncrement();
            $table->string('titre', 25);
            $table->text('description');
            $table->date('date_idee');
            $table->integer('id_utilisateur');
            $table->timestamps();
			
			$table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boite_idees');
    }
}
