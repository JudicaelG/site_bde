<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->integer('id_utilisateur')->autoIncrement();
            $table->string('nom_de_famille');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_statut');
            $table->rememberToken();
            $table->timestamps();
			
			$table->foreign('id_statut')->references('id_statut')->on('statuts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
