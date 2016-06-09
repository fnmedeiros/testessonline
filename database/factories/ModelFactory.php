<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Person::class, function(Faker\Generator $faker) {
    return [
        'name'    => $faker->name,
        'address' => $faker->address
    ];
});

$factory->define(App\Specialty::class, function(Faker\Generator $faker) {
    return[
        'name' => $faker->name
    ];
});

$factory->define(App\Doctor::class, function(Faker\Generator $faker) {
    return[
        'person_id' => factory(App\Person::class)->create()->id,
        'specialty_id' => factory(App\Specialty::class)->create()->id,
        'crm' => $faker->numberBetween(0, 5)
    ];
});

$factory->define(App\Health_Center::class, function(Faker\Generator $faker) {
    return [
        'name'    => $faker->name,
        'address' => $faker->address
    ];
});