<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'text'    => $faker->text,
        'user_id' => \App\User::query()->inRandomOrder()->first()->id
    ];
});
