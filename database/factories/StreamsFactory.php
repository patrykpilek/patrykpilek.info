<?php

/* @var $factory Factory */
use App\Stream;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Stream::class, function (Faker $faker) {
    return [
        'userId' => rand(1, 4),
        'title' => $faker->sentence( 6, true),
        'description' => $faker->text,
    ];
});
