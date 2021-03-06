<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id')->unsingned;
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');
            //$table->unsignedInteger('specialty_id')->nullable();
            //$table->foreign('specialty_id')->references('id')->on('specialties');
            $table->unsignedInteger('crm');
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
        Schema::table('doctors', function (Blueprint $table) {
                    //
                    $table->dropForeign('doctors_person_id_foreign');
                    //$table->dropForeign('doctors_specialty_id_foreign');
                });
        Schema::drop('doctors');    
    }
}
