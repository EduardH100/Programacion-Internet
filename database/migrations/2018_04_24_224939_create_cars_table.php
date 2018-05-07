<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
						$table->foreign('user_id')->references('id')->on('users')
							->onDelete('cascade');
            $table->integer('price')->unsigned();
            $table->string('name');
            $table->string('model',20);
            $table->string('brand',20);
            $table->string('description',100);
            $table->string('user_address');
            $table->char('year',4);
            $table->char('user_tel',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
