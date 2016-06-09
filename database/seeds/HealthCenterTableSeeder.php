<?php

use Illuminate\Database\Seeder;
use App\Health_Center;

class HealthCenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Health_Center::class,2)->create();
    }
}
