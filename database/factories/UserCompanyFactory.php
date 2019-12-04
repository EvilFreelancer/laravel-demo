<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserCompany;
use Faker\Generator as Faker;

$factory->define(UserCompany::class, function (Faker $faker) {
    return [
        'company_id' => \App\Models\Company::query()->inRandomOrder()->first()->id,
        'user_id'    => \App\User::query()->inRandomOrder()->first()->id,
    ];
});
