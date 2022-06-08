<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsejoComunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consejo_comunals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('comunidadsId')->unsigned();
            $table->timestamps();
            //relaciones de la migracion
            $table->foreign('comunidadsId')->references('id')->on('comunidads')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consejo_comunals');
    }
}
