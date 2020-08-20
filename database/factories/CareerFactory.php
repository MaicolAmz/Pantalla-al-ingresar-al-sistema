<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Career;
use Faker\Generator as Faker;

$factory->define(Career::class, function (Faker $faker) {
    return [
        'institution_id' => $faker->random_int(1, 10),
        'code' => $faker->text,
        'name' => $faker->text,
        'description' => $faker->text,
        'modality_id' => $faker->random_int(1, 10),
        'professional_degree_id' => $faker->random_int(1, 10),
        'resolution_number' => $faker->text,
        'title' => $faker->text,
        'acronym' => $faker->text,
        'type_id' => $faker->random_int(1, 10),
        'state_id' => 1
    ];
});
