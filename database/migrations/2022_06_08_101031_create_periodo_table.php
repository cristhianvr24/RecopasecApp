<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estudianteId')->unsigned();
            $table->bigInteger('carreraid')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('estudianteId')->references('id')->on('estudiante')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('carreraId')->references('id')->on('carrera')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodo');
    }
}
