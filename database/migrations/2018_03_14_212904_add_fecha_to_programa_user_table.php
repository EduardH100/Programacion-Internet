<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFechaToProgramaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programa_user', function (Blueprint $table) {
            $table->date('fecha_inicio')->default('2018-01-01');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programa_user', function (Blueprint $table) {
            $table->dropColumn('fecha_inicio');
              
        });
    }
}
