<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_evenement')->autoIncrement();
			$table->string('titre', 50);
			$table->text('description');
			$table->date('date_evenement');
			$table->float('prix');
			$table->string('recurrence', 50);
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
        Schema::dropIfExists('evenement');
    }
}
