<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'text'    => $faker->text,
        'post_id' => \App\Models\Post::query()->inRandomOrder()->first()->id,
        'user_id' => \App\User::query()->inRandomOrder()->first()->id,
    ];
});
