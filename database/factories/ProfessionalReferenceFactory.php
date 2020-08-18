<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProfessionalReference;
use Faker\Generator as Faker;

$factory->define(ProfessionalReference::class, function (Faker $faker) {
    return [
        'institution' => $faker->name,
        'position' => $faker->text,
        'contact' => $faker->tollFreePhoneNumber,
        'phone' => $faker->phoneNumber
    ];
});
