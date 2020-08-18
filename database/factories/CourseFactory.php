<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'event_type' => $faker->name,
        'institution' => $faker->name,
        'event_name' => $faker->name,
        'start_date' => $faker->date,
        'finish_date' => $faker->date,
        'hours' => $faker->time
    ];
});
