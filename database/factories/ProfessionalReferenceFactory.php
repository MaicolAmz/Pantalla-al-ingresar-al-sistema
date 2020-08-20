<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProfessionalReference;
use Faker\Generator as Faker;

$factory->define(ProfessionalReference::class, function (Faker $faker) {
    return [
        'professional_id' => $faker->random_int(31, 38),
        'institution' => $faker->name,
        'position' => $faker->text,
        'contact' => $faker->tollFreePhoneNumber,
        'phone' => $faker->phoneNumber,
        'state_id' => 1
    ];
});
