<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttendancesSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances_schedules', function (Blueprint $table) {
                    $table->unsignedInteger('attendance_id');
                    $table->foreign('attendance_id')->references('id')->on('attendances');
                    $table->unsignedInteger('schedule_id');
                    $table->foreign('schedule_id')->references('id')->on('schedules');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances_schedules', function (Blueprint $table) {
                    //
                    $table->dropForeign('attendances_schedules_attendance_id_foreign');
                    $table->dropForeign('attendances_schedules_schedule_id_foreign');
                });
        Schema::drop('attendances_schedules');
    }
}
