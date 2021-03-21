<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'user' => $faker->word,
        'contact_date' => $faker->dateTime,
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'lead' => 'Facebook',
        'city' => $faker->word,
        'comment' => $faker->sentence,
        'created_at' => $faker->dateTimeBetween('-1 years')
    ];
});
