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
                $table->date('start')->nullable();
                $table->date('end')->nullable();
                $table->string('place')->nullable();
                $table->integer('price')->nullable();
                $table->mediumText('content')->nullable();
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
