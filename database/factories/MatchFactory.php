<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    // use faker to populate the database with some random data
    return [
        'team_size' => $faker->numberBetween($min = 3, $max = 11), // 3 to 11 players
        'team_a_name' => $faker->colorName, // name the teams random colors
        'team_b_name' => $faker->colorName,
        'team_a_score' => $faker->numberBetween($min = 0, $max = 5), // score between 0-5 points
        'team_b_score' => $faker->numberBetween($min = 0, $max = 5), 
        'game_complete' => $faker->boolean(), // has the game been completed?
    ];
});
