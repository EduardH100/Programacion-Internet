<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password_conf')->default('');
            $table->string('image_name')->nullable();
            $table->string('address')->default('');
            $table->integer('telephone')->unsigned()->default(00000000);
            $table->integer('age')->unsigned()->default(0);
            $table->multiLineString('favorites')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('password_conf');
            $table->dropColumn('image_name');
            $table->dropColumn('address');
            $table->dropColumn('telephone');
            $table->dropColumn('age');
            $table->dropColumn('favorites');
        });
    }
}
