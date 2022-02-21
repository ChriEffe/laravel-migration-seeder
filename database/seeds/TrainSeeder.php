<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train-> company = $faker->word();
            $train-> departure_station = $faker->city();
            $train-> arrival_station = $faker->city();
            $train-> departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train-> arrival_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train-> departure_time = $faker->time();
            $train-> arrival_time = $faker->time();
            $train-> code_train = $faker->regexify('[A-Z]{3}[0-5]{5}');
            $train-> carriages_number = $faker->numberBetween(5,12);
            $train-> on_time = $faker->boolean();
            $train-> cancelled = $faker->boolean();
            $train->save();
        }
    }
}
