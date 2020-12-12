<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carwork;
use Faker\Generator as Faker;

$factory->define(Carwork::class, function (Faker $faker) {
    return [
        'id' => factory(\App\User::class),
        'Shopname' => $faker->title,
        'Address' => $faker->address,
        'Rating' => $faker->sentence

    ];
});
