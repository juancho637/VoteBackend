<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Vote::class, function (Faker $faker) {
    return [
        'lang' => $faker->randomElement(['java', 'php', 'javascript']),
    ];
});
