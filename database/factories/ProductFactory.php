<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(3),
        'description' => $faker->paragraph(2),
        'price' => $faker->randomFloat($maxDecimals = 2, $min=100, $max = 1000),
        'stock' => $faker->numberBetween(1, 200),
        'status' => $faker->randomElement(['available','unavailable']),

    ];
});


SELECT count(title) as total, title, stock FROM `products` group by title

