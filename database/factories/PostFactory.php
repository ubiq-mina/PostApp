<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(PostApp\Post::class, function (Faker $faker) {
    return [
        // 'user_id' => $faker->randomNumber(3, false),
        'user_id' => PostApp\User::all()->random()->id,
        'content' => $faker->text
    ];
});
