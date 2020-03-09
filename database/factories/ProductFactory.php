<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
        $tags = collect(['Book', 'Game', 'Home', 'Equipment', 'Celebration', 'Adventure', 'Food', 'Romantic', 'Socializing', 'Instagrammable', 'Family', 'Theme Parks'])
            ->random(2)
            ->values()
            ->all();
    return [
        'title' => $faker->sentence(),
        'description' => $faker->text(),
        'tags' => $tags,
    ];
});
