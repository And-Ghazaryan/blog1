<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {

            // $table->unsignedBigInteger('user_id')->unsigned()->default(1);
            // $table->foreign('user_id')->references('id')->on('users');

            // $table->unsignedBigInteger('type_id')->unsigned()->default(1);
            // $table->foreign('type_id')->references('id')->on('types');

            // $table->unsignedBigInteger('region_id')->unsigned()->default(1);
            // $table->foreign('region_id')->references('id')->on('region');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
}
