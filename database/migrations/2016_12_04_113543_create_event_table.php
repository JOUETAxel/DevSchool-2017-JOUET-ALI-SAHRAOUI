<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('events', function (Blueprint $table)
        {
                $table->increments('id');
                $table->string('title');
                $table->date('start');
                $table->date('end');
                $table->string('place');
                $table->integer('price');
                $table->mediumText('content');
                $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('events');

    }
}
