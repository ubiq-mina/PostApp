<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(PostApp\Profile::class, function (Faker $faker) {
    $genders = ['Male', 'Female'];
    return [
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'country' => $faker->text(20),
        'sex' => mt_rand(0,1),
        'mobile' => $faker->e164PhoneNumber,
    ];
});
