<?php

use Faker\Generator as Faker;

$factory->define(\App\Activity::class, function (Faker $faker) {
    return [
        'habit_id' =>$faker->numberBetween($min = 1, $max = 6),
        'user_id' =>$faker->numberBetween($min = 1, $max = 51),
        'startTime' =>$faker->dateTimeBetween($startDate = '-2 day', $endDate = '-1 day', $timezone = null),
        'endTime' =>$faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now', $timezone = null)
    ];
});