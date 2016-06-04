<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('fone', 15);
            $table->string('address', 100);
            $table->string('neighborhood', 80);
            $table->string('complement', 80);
            $table->string('city', 80);
            $table->string('zip_code', 10);
            $table->string('state', 2);

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
        Schema::drop('health_centers');
    }
}
