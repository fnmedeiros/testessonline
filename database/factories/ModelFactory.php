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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Person::class, function (Faker\Generator $faker) {
	return [
		'name'		=> $faker->name,
		'address'	=> $faker->address
	];
});

$factory->define(App\Specialty::class, function (Faker\Generator $faker){
    return[
        'name'      =>$faker->name
    ];
});

$factory->define(App\Doctor::class, function(Faker\Generator $faker){
    return[
        //'person_id' => 34,
        //'specialty_id' => 19
        'person_id'     => function() {
            //dd(factory(App\Person::class)->create()->id);
            return factory(App\Person::class)->create()->id;
        }
        ,
        'specialty_id'  => function() {
            return factory(App\Specialty::class)->create()->id;
        }
    ];
});
