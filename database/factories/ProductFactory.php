<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'price' => rand(1000, 5000),
        'description' => $faker->name, // password
        'image' => Str::random(10),
        'category_id' => rand(1,3),
        'supplier_id' => rand(1,3),
    ];
});
