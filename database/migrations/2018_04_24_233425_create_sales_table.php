<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
						$table->integer('car_id')->unsigned();
						$table->foreign('car_id')->references('id')
							->on('cars')
							->onDelete('cascade');
						$table->integer('seller_id')->unsigned();
						$table->foreign('seller_id')->references('id')
							->on('users')
							->onDelete('cascade');
						$table->integer('buyer_id')->unsigned();
						$table->foreign('buyer_id')->references('id')
							->on('users')
							->onDelete('cascade');
						 $table->integer('price')->unsigned();
						 $table->enum('way_pay', ['cash', 'card'] );
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
        Schema::dropIfExists('sales');
    }
}
