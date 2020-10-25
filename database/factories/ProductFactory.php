<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => "Item {$faker->word}",
        'price' => 200,
        'description' => $faker->text($maxNbChars = 200),
        'thumbnail' => "https://picsum.photos/550/600"
    ];
});
