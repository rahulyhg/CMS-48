<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('uri');
            $table->boolean('parent_id')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('position')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navitems');
    }
}
