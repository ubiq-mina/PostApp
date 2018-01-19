<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(PostApp\Comment::class, function (Faker $faker) {
    return [
        // 'user_id' => $faker->randomNumber(3, false),
        'user_id' => PostApp\User::all()->random()->id,
        'post_id' => PostApp\Post::all()->random()->id,
        'content' => $faker->text
    ];
});
