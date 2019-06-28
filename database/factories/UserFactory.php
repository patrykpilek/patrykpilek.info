<?php

/** @var Factory $factory */
use App\User;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    $firstName = $faker->firstName(null);
    $lastName = $faker->lastName;

    return [
        'username' => $firstName . ' ' . $lastName,
        'email' => strtolower($firstName . '.' . $lastName) .'@' . $faker->safeEmailDomain,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'avatar' => 'default_avatar.png',
        'remember_token' => Str::random(10),
    ];
});
