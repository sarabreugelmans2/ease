<?php

use Faker\Generator as Faker;

$factory->define(\App\Relax::class, function (Faker $faker) {
    return [
        'habit_id' =>$faker->numberBetween($min = 1, $max = 6),
        'user_id' =>$faker->numberBetween($min = 1, $max = 51),
        'status' =>$faker->numberBetween($min = 0, $max = 2)
    ];
});
