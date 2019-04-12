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
        Schema::create('states', function(Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
        });

        Schema::create('metro_area', function(Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedInteger('state_id');
           $table->string('name');
        });

        Schema::create('cities', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('metro_area_id');
            $table->string('name');
        });

        Schema::create('communities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('city_id');
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
        Schema::dropIfExists('communities');
    }
}
