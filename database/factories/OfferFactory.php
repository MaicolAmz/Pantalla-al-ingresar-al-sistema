<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'company_id' => random_int(1, 10),
        'code' => $faker->text($maxNbChars = 100),
        'contact' => $faker->tollFreePhoneNumber,
        'email' => $faker->email,
        'phone' => $faker->tollFreePhoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'contract_type' => $faker->text($maxNbChars = 100),
        'position' => $faker->text($maxNbChars = 100),
        'training_hours' => $faker->text($maxNbChars = 100),
        'experience_time' => $faker->text($maxNbChars = 100),
        'remuneration' => $faker->text($maxNbChars = 100),
        'working_day' => $faker->text($maxNbChars = 100),
        'number_jobs' => $faker->text($maxNbChars = 100),
        'start_date' => $faker->date,
        'finish_date' => $faker->date,
        'activities' => $faker->text($maxNbChars = 100),
        'aditional_information' => $faker->text($maxNbChars = 100),
        'location_id' => random_int(1, 10),
        'state_id' => 1
    ];
});