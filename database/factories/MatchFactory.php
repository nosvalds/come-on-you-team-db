<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    // use faker to randomly populate game history
    return [
        'team_size' => $faker->numberBetween($min = 3, $max = 11),
        'team_a_name' => $faker->colorName,
        'team_b_name' => $faker->colorName,
        'team_a_score' => $faker->numberBetween($min = 0, $max = 5),
        'team_b_score' => $faker->numberBetween($min = 0, $max = 5),
        'game_complete' => $faker->boolean(),
    ];
});
