<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ModelTable::class, function (Faker $faker) {
    return [
        'name' => $faker->text(6),
        'brand_id' => $faker->numberBetween($min = 1, $max = 2)
    ];
});
