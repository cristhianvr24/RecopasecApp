<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estudiantesId')->unsigned();
            $table->bigInteger('carreraid')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('estudiantesId')->references('id')->on('estudiantes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('carreraId')->references('id')->on('carreras')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}
