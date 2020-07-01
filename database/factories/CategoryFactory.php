<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$prefix = 'category';

$factory->define(Category::class, function (Faker $faker) use($prefix) {
    return [
        'category' => $prefix . $faker->text()
    ];
});
