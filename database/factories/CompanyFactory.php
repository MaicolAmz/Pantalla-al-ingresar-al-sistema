<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'type_id' => 8, 
        'trade_name' => $faker->company,
        'comercial_activity' => $faker->catchPhrase,
        'state_id' => 1
    ];
});
