<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('municipioId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('municipioId')->references('id')->on('municipio')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquia');
    }
}
