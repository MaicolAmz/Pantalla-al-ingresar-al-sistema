<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ignug\Institution;
use Faker\Generator as Faker;

$factory->define(Institution::class, function (Faker $faker) {
    return [
        'code' => $faker->ean13,
        'name' => $faker->text($maxNbChars = 100),
        'slogan' => $faker->catchPhrase,
        'state_id' => 1, 
    ];
});
