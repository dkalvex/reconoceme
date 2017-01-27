<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Indicator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('details');
            $table->integer('goal');
            $table->integer('points');
            $table->integer('badge');
            $table->integer('type');
            $table->integer('frequency');
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
        Schema::dropIfExists('indicator');
    }
}
