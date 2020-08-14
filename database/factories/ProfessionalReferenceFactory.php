<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'institution' => $faker->name,
        'position' => $faker->text,
        'contact' => $faker->tollFreePhoneNumber,
        'phone' => $faker->phoneNumber
    ];
});
