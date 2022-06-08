<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorComunitarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_comunitario', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique();
            $table->string('nombre_1');
            $table->string('nombre_2')->nullable();
            $table->string('apellido_1');
            $table->string('apellido_2')->nullable();
            $table->string('telefono');
            $table->string('email')->unique();
            $table->bigInteger('consejo_comunalId')->unsigned();
            $table->bigInteger('cargoId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('consejo_comunalId')->references('id')->on('consejo_comunal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cargoId')->references('id')->on('cargo')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_comunitario');
    }
}
