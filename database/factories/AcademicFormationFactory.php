<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'registration_date' => $faker->date,
        'senescyt_code' => $faker->iban,
        'has_titling' => $faker->boolean, 
    ];
});
