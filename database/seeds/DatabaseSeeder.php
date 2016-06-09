<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //$this->call(PersonTableSeeder::class, 30);
        //$this->call(SpecialtiesTableSeeder::class, 8);
        //$this->call(DoctorsTableSeeder::class);
        $this->call(HealthCenterTableSeeder::class);


        Model::reguard();
    }
}
