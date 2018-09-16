<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(250,250),
        'product_id' => $faker->numberbetween(1,100)
    ];
});
