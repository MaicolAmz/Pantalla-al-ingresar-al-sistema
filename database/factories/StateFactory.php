<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ignug\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'code' => $faker->ean13,
        'name' => $faker->text($maxNbChars = 100),
        'description' => $faker->text($maxNbChars = 100),
        'state' => 1
    ];
});
