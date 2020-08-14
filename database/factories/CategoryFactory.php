<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->name, // password
        'image' => Str::random(10),
        'parent_id' => rand(1,3),
    ];
});
