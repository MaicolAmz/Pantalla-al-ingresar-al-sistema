<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'user_id' => $faker->random_int(31, 38),
        'type_id' => $faker->random_int(31, 38),
        'trade_name' => $faker->name,
        'comercial_activity' => $faker->catchPhrase,
        'state_id' => 1
    ];
});
