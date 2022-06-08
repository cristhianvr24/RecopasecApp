<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionComunitarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_comunitario', function (Blueprint $table) {
            $table->id();
            $table->integer('calificacion_tutor_com');
            $table->integer('calificacion_tutor_acad');
            $table->bigInteger('periodoId')->unsigned();
            $table->bigInteger('proyecto_comId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('periodoId')->references('id')->on('periodo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('proyecto_comId')->references('id')->on('proyecto_com')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion_comunitario');
    }
}
