<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_perfil');
            $table->foreign('id_perfil')->references('id')->on('perfil');
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->string('telefone', 255);
            $table->date('dataNasc')->nullable();
            $table->string('cargo', 255);
            $table->float('salario');
            $table->string('foto', 255);
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
        Schema::dropIfExists('usuarios');
    }
}
