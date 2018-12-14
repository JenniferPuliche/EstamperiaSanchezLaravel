<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'image'=> '/public/products/otra mas.png',
        'wholesale_price' => $faker->numberBetween(1,100),
        'retail_price' => $faker->numberBetween(1,50),
    ];
});
