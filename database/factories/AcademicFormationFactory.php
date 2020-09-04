<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\AcademicFormation;
use Faker\Generator as Faker;

$factory->define(AcademicFormation::class, function (Faker $faker) {
    return [
        'professional_id' => $faker->unique()->numberBetween($min = 1, $max = 10),
        'institution_id' => random_int(4, 6),
        'career_id' => random_int(1, 3),
        'professional_degree_id' => random_int(7, 9),
        'registration_date' => $faker->date,
        'senescyt_code' => $faker->ean13, 
        'has_titling' => $faker->boolean, 
        'state_id' => 1, 
    ];
});
