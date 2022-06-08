<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionComunitariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_comunitarios', function (Blueprint $table) {
            $table->id();
            $table->integer('calificacion_tutor_com');
            $table->integer('calificacion_tutor_acad');
            $table->bigInteger('periodosId')->unsigned();
            $table->bigInteger('proyecto_comsId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('periodosId')->references('id')->on('periodos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('proyecto_comsId')->references('id')->on('proyecto_coms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion_comunitarios');
    }
}
