<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id')->unsingned;
=======
            $table->increments('id');
>>>>>>> f52c187ad0496454c42ca4f11d694df67736da7f
            $table->string('name', 80);
            $table->string('cpf', 15);
            $table->string('fone', 15);
            $table->string('mobile', 15);
            $table->string('address', 100);
            $table->string('neighborhood', 80);
            $table->string('complement', 80);
            $table->string('city', 80);
            $table->string('zip_code', 10);
            $table->string('state', 2);
            $table->date('date_birth');
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
        Schema::drop('people');
    }
}
