<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id')->unsingned;
=======
            $table->increments('id');
>>>>>>> f52c187ad0496454c42ca4f11d694df67736da7f
            $table->string('day_week', 20);
            $table->time('begin');
            $table->time('final');
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
        Schema::drop('schedules');
    }
}
