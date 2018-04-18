<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id')->autoIncrement();
			$table->string('titre', 50);
			$table->text('description');
			$table->date('date_evenement')->nullable();
			$table->float('prix')->nullable();
			$table->string('recurrence', 50)->nullable();
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
        Schema::dropIfExists('evenements');
    }
}
