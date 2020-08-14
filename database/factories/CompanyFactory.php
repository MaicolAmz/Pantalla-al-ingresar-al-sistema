<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'trade_name' => $faker->name,
        'comercial_activity' => $faker->catchPhrase
    ];
});
