<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorsSpecialties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_specialties', function (Blueprint $table) {
                    $table->unsignedInteger('doctor_id');
                    $table->foreign('doctor_id')->references('id')->on('doctors');
                    $table->unsignedInteger('specialty_id');
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
        Schema::table('doctors_specialties', function (Blueprint $table) {
                    //
                    $table->dropForeign('doctors_specialties_doctor_id_foreign');
                    $table->dropForeign('doctors_specialties_specialty_id_foreign');
                });
        Schema::drop('doctors_specialties');
    }
}
