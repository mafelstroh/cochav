<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

// Model Factory for Products
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'product_name' 		  => $faker->name,
        'product_description' => $faker->paragraph($nbSentences = 10),
        'product_price'       => $faker->numberBetween(10, 20),
        'product_quantity'    => $faker->numberBetween(10, 20),
        'product_isactive'    => $faker->boolean

    ];
});