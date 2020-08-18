<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AcademicFormation;
use Faker\Generator as Faker;

$factory->define(AcademicFormation::class, function (Faker $faker) {
    return [
        'registration_date' => $faker->date,
        'senescyt_code' => $faker->iban,
        'has_titling' => $faker->boolean, 
    ];
});
