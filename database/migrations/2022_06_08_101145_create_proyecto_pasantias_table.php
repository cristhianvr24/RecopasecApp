<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoPasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_pasantias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('titulo');
            $table->date('fechaI');
            $table->date('fechaF');
            $table->bigInteger('tutor_academicoId')->unsigned();
            $table->bigInteger('tutor_institucionalId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('tutor_academicoId')->references('id')->on('tutor_academicos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tutor_institucionalId')->references('id')->on('tutor_institucionals')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_pasantias');
    }
}
