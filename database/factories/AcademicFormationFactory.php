<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AcademicFormation;
use Faker\Generator as Faker;

$factory->define(AcademicFormation::class, function (Faker $faker) {
    return [
        'professional_id' => $faker->random_int(31, 38),
        'institution_id' => $faker->random_int(31, 38),
        'career_id' => $faker->random_int(31, 38),
        'professional_degree_id' => $faker->random_int(31, 38),
        'registration_date' => $faker->date,
        'senescyt_code' => $faker->text, 
        'has_titling' => $faker->boolean, 
        'state_id' => 1, 
    ];
});
