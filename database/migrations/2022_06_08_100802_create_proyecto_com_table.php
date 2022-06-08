<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoComTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_com', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('titulo');
            $table->date('fechaI');
            $table->date('fechaF');
            $table->bigInteger('tutor_comunitarioId')->unsigned();
            $table->bigInteger('tutor_academicoId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('tutor_comunitarioId')->references('id')->on('tutor_comunitario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tutor_academicoId')->references('id')->on('tutor_academico')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_com');
    }
}
