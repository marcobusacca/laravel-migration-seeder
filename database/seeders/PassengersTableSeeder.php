<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// IMPORTARE IL MODEL
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;

class PassengersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 4; $i++){
            $passenger = new Passenger();

            $passenger->tax_code = $faker->bothify('?#?#?#?#?#?#?#?#');
            $passenger->name = $faker->firstName();
            $passenger->surname = $faker->lastName();
            $passenger->date_of_birth = $faker->dateTimeThisCentury();

            $passenger->save();
        }
    }
}
