<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorsHealthCenters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_health_centers', function (Blueprint $table) {
                    $table->unsignedInteger('doctor_id');
                    $table->foreign('doctor_id')->references('id')->on('doctors')
                        ->onUpdated('cascade')
                        ->onDelete('cascade');
                    $table->unsignedInteger('health_center_id');
                    $table->foreign('health_center_id')->references('id')->on('health_centers')
                        ->onUpdated('cascade')
                        ->onDelete('cascade');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors_health_centers', function (Blueprint $table) {
                    //
                    $table->dropForeign('doctors_health_centers_doctor_id_foreign');
                    $table->dropForeign('doctors_health_centers_health_center_id_foreign');
                });
        Schema::drop('doctors_health_centers');
    }
}
