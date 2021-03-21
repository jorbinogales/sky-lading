<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mail;
use Faker\Generator as Faker;

$factory->define(Mail::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city

    ];
});
