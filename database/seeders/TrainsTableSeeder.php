<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 10; $i++){
            $train = new Train();

            $train->train_code = $faker->bothify('??????????');
            $train->company = $faker->word();
            $train->departure_station = $faker->words(2, true);
            $train->arrival_station = $faker->words(2, true);
            $train->departure_date = $faker->dateTimeThisYear();
            $train->departure_time = $faker->time('H:i');
            $train->arrival_date = $faker->dateTimeThisYear();
            $train->arrival_time = $faker->time('H:i');
            $train->coaches_number = $faker->randomDigit();
            $train->on_time = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }
    }
}
