<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'       => $faker->sentence(6),
        'description' => $faker->text(600),
        'user_id'     => \App\User::query()->inRandomOrder()->first()->id
    ];
});
