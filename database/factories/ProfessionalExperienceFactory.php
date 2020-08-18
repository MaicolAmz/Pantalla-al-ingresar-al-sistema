<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProfessionalExperience;
use Faker\Generator as Faker;

$factory->define(ProfessionalExperience::class, function (Faker $faker) {
    return [
        'employer' => $faker->name,
        'job_description' => $faker->text,
        'start_date' => $faker->date,
        'finish_date' => $faker->date,
        'reason_leave' => $faker->text,
        'current_work' => $faker->boolean
    ];
});
