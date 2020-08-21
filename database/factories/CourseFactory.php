<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'professional_id' => $faker->random_int(31, 38),
        'event_type' => $faker->name,
        'event_type_id' => $faker->random_int(31, 38),
        'institution_id' => $faker->random_int(31, 38),
        'institution' => $faker->name,
        'event_name' => $faker->name,
        'start_date' => $faker->date,
        'finish_date' => $faker->date,
        'hours' => $faker->time,
        'type_certification_id' => $faker->random_int(31, 38),
        'state_id' => 1
    ];
});
