<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'image'=> '/imagenes/avatars/avatarDefault.png',
        'wholesale_price' => $faker->numberBetween(1,100),
        'retail_price' => $faker->numberBetween(1,50),
    ];
});
