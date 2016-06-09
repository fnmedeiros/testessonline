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
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('specialty_id');
            $table->timestamps();

            $table->foreign('health_center_id')->references('id')->on('health_centers');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('specialty_id')->references('id')->on('specialties');
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
                    $table->dropForeign('attendances_specialty_id_foreign');
                });
        Schema::drop('attendances');
    }
}
