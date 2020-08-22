<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ignug\Catalogue as Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'parent_code_id' => null,// random_int(1, 10),
        'code' => $faker->ean13,
        'name' => $faker->name,
        'type' => $faker->text($maxNbChars = 100),
        'icon' => $faker->text($maxNbChars = 100),
        'state_id' => 1
    ];
});
