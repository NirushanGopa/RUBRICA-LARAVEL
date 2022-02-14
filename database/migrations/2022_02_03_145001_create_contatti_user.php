<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContattiUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatti_user', function (Blueprint $table) {
            $table->id();
            $table->integer('iduser');
            $table->string('nome');
            $table->integer('cellulare');
            $table->string('email');
            $table->string('indirizzo');
            $table->date('nascita');
            $table->string('note');
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
        Schema::dropIfExists('contatti_user');
    }
}
