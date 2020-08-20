<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'company_id' => $faker->random_int(1, 10),
        'code' => $faker->text,
        'contact' => $faker->tollFreePhoneNumber,
        'contact' => $faker->email,
        'phone' => $faker->tollFreePhoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'contract_type' => $faker->text,
        'position' => $faker->text,
        'training_hours' => $faker->text,
        'experience_time' => $faker->text,
        'remuneration' => $faker->text,
        'working_day' => $faker->text,
        'numbers_jobs' => $faker->text,
        'start_date' => $faker->date,
        'finish_date' => $faker->date,
        'activities' => $faker->text,
        'aditional_information' => $faker->text,
        'location_id' => $faker->random_int(1, 10),
        'state_id' => 1
    ];
});