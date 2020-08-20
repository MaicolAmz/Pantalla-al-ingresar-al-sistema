<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Professional;
use Faker\Generator as Faker;

$factory->define(Professional::class, function (Faker $faker) {
    return [
        'user_id' => $faker->random_int(1, 10),
        'about_me' => $faker->text,
        'state_id' => 1
    ];
});
