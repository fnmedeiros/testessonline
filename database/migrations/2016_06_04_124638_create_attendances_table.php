<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id')->unsingned;
            $table->unsignedInteger('health_center_id');
            $table->foreign('health_center_id')->references('id')->on('health_centers');
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
        Schema::table('attendances', function (Blueprint $table) {
                    //
                    $table->dropForeign('attendances_health_center_id_foreign');
                    $table->dropForeign('attendances_doctor_id_foreign');
                });
        Schema::drop('attendances');
    }
}
