<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->realText(),
        'category_id' => $faker->numberBetween(1,3),
        'image'=> '/imagenes/avatars/avatarDefault.png',
        'wholesale_price' => $faker->numberBetween(300,900),
        'retail_price' => $faker->numberBetween(300,900),
    ];
});
