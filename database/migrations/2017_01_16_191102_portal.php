<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('level_points');
            $table->integer('back_points');
            $table->string('url');
            $table->integer('active');
            $table->integer('company')->unsigned()->nullable();
            $table->integer('plan');
            $table->timestamps();
        });

        /*Schema::table('portal', function($table) {
           $table->foreign('company')->references('id')->on('company');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portal');
    }
}
