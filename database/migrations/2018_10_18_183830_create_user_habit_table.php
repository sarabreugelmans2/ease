<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHabitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_habit', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();;
            $table->integer('habit_id')->unsigned();;
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('habit_id')->references('id')->on('habits');
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
        Schema::dropIfExists('user_habit');
    }
}
