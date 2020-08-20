<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'code' => $faker->text,
        'name' => $faker->text,
        'description' => $faker->text,
        'state' => 1
    ];
});
