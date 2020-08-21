<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\AcademicFormation;
use Faker\Generator as Faker;

$factory->define(AcademicFormation::class, function (Faker $faker) {
    return [
        'professional_id' => random_int(1, 10),
        'institution_id' => random_int(1, 10),
        'career_id' => random_int(1, 10),
        'professional_degree_id' => random_int(1, 10),
        'registration_date' => $faker->date,
        'senescyt_code' => $faker->ean13, 
        'has_titling' => $faker->boolean, 
        'state_id' => 1, 
    ];
});
