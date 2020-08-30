<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;


$factory->define(\App\Models\Feed::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->randomHtml(),
        'event_id' => rand(1, 2)
    ];
});
