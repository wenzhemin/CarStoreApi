<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'price' => $faker->randomNumber(2),
        'img_url' => $faker->text(16),
        'description_text' => $faker->text(16),
        'color_id' => $faker->numberBetween($min = 1, $max = 2),
        'model_id' => $faker->numberBetween($min = 1, $max = 2),
        'series' => $faker->text(6),
    ];
});
