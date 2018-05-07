<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;   

class CreaTablaRegistros extends Migration
{
    /**
     * Run the migrations.
     * phpartisan make:migration --create=registros crea_tabla_registros
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            //$table->timestamps();     //genera fecha de creacion y de modificacion
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->dateTime('ingreso');
          $table->dateTime('salida')->nullable();
          $table->boolean('valido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
