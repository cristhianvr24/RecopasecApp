<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorAcademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_academico', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique();
            $table->string('nombre_1');
            $table->string('nombre_2')->nullable();
            $table->string('apellido_1');
            $table->string('apellido_2')->nullable();
            $table->string('telefono');
            $table->string('email')->unique();
            $table->bigInteger('condicionId')->unsigned();
            $table->bigInteger('especialidadId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('condicionId')->references('id')->on('condicion')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('especialidadId')->references('id')->on('especialidad')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_academico');
    }
}
