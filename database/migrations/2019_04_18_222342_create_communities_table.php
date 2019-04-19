<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        Schema::create('metroareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('state_id');
        });

        Schema::table('metroareas', function($table) {
            $table->foreign('state_id')->references('id')->on('states');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('metroarea_id');
//            $table->foreign('metroarea_id')->references('id')->on('metroareas');
        });

        Schema::table('cities', function($table) {
            $table->foreign('metroarea_id')->references('id')->on('metroareas');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
        Schema::dropIfExists('metroareas');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('communities');
    }
}
