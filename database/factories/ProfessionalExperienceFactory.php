<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\ProfessionalExperience;
use Faker\Generator as Faker;

$factory->define(ProfessionalExperience::class, function (Faker $faker) {
    return [
        'professional_id' => $faker->random_int(31, 38),
        'employer' => $faker->name,
        'position_id' => $faker->random_int(31, 38),
        'job_description' => $faker->text,
        'start_date' => $faker->date,
        'finish_date' => $faker->date,
        'reason_leave' => $faker->text,
        'current_work' => $faker->boolean,
        'state_id' => 1
    ];
});
