<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('parroquiasId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('parroquiasId')->references('id')->on('parroquias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunidads');
    }
}
