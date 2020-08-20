<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard;
use Faker\Generator as Faker;

$factory->define(Ability::class, function (Faker $faker) {
    return [
        'professional_id' => random_int(31, 38),
        'category_id' => random_int(31, 38),
        'description' => $faker->text,
        'state_id' => 1,
    ];
});
