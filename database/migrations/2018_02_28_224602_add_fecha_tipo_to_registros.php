<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFechaTipoToRegistros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('registros', function (Blueprint $table) {
             $table->dropColumn('ingreso'); //Rename a fecha_hora
             $table->dropColumn('salida');
             $table->dateTime('fecha_hora')->nullable()
							 ->default(null)
							 ->after('user_id');
             $table->string('tipo',20)->after('fecha_hora');
             
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registros', function (Blueprint $table) {
          $table->dropColumn('fecha_hora');
          $table->dropColumn('tipo');
          $table->dateTime('ingreso')->nullable()
						->default(null)
						->after('user_id');
          $table->dateTime('salida')
						->nullable()->default(null)
						->after('user_id');
                     
        });
    }
}
