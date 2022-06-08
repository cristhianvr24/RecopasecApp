<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionPasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_pasantias', function (Blueprint $table) {
            $table->id();
            $table->integer('calificacion_tutor_ac');
            $table->integer('calificacion_tutor_int');
            $table->integer('calificacion_comite_evaluador');
            $table->bigInteger('periodoId')->unsigned();
            $table->bigInteger('proyecto_pasantiasId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('periodoId')->references('id')->on('periodo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('proyecto_pasantiasId')->references('id')->on('proyecto_pasantias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion_pasantias');
    }
}
