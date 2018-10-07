<?php

use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'firstName' =>$faker->firstName,
        'lastName' =>$faker->lastName,
        'email' =>$faker->email,
        'token' =>$faker->sha1
    ];
});
