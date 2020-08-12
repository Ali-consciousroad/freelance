<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        // Dummy data with 2 words
        'name' => $faker->name(2),
        // Dummy data with 20 words
        'description' => $faker->sentence(20),
        // Generate number between 100eur and 5000eur
        'price' => $faker->numberBetween(100, 5000),
        
    ];
});
