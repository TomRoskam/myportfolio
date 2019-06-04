<?php

use Faker\Generator as Faker;

$factory->define(App\Blok1::class, function (Faker $faker) {
    return [
        'toets' => $faker->name(10),
        'cijfer' => $faker->numberBetween($min = 1, $max = 10),
        'ECwaarde' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
