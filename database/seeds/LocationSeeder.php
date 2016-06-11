<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 100) as $item) {
            $locationEntry                    = new \App\Models\LocationEntry();
            $locationEntry->longitude         = $faker->longitude(-24, -13); // Iceland Max longitude range
            $locationEntry->latitude          = $faker->latitude(63.5, 66); // Iceland Max latitude range
            $locationEntry->taken_at          = $faker->dateTimeThisMonth($max = 'now');
            $locationEntry->device_identifier = rand(1, 3); // one of three random 'devices'
            $locationEntry->save();
        }
    }
}
