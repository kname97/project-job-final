<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use  App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt(Str::random(10)), // password
        'level' => rand(0, 2),
        'remember_token' => Str::random(10),
    ];

});
