<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_coms', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('titulo');
            $table->date('fechaI');
            $table->date('fechaF');
            $table->bigInteger('tutor_comunitariosId')->unsigned();
            $table->bigInteger('tutor_academicosId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('tutor_comunitariosId')->references('id')->on('tutor_comunitarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tutor_academicosId')->references('id')->on('tutor_academicos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_coms');
    }
}
