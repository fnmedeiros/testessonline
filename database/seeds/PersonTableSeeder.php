<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Person::create([
        	'name'		=> 'Felipe Medeiros',
        	'address' 	=> 'Praca da Matriz'
        	]);*/

        factory(Person::class)->create();
    }
}
