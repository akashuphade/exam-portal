<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\QuestionChoices;
use Faker\Generator as Faker;

$factory->define(QuestionChoices::class, function (Faker $faker) {
    return [
        'choice' => $faker->name()
    ];
});
