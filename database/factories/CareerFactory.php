<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ignug\Career;
use Faker\Generator as Faker;

$factory->define(Career::class, function (Faker $faker) {
    return [
        'institution_id' => rand(1, 10),
        'code' => $faker->ean13,
        'name' => $faker->randomElement(['Electrónico', 'Mecánico Industrial', 'Automotriz', 'Software']),
        'description' => $faker->text($maxNbChars = 100),
        'modality_id' => rand(1, 10),
        'resolution_number' => $faker->text($maxNbChars = 200),
        'title' => $faker->text($maxNbChars = 100),
        'acronym' => $faker->text($maxNbChars = 100),
        'type_id' => rand(1, 10),
        'state_id' => 1
    ];
});
