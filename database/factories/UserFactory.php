<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(Astral\Models\User::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'github_id'      => $faker->randomNumber,
        'username'       => $faker->userName,
        'avatar_url'     => $faker->imageUrl($width = 100, $height = 100),
        'access_token'   => Str::random(40),
        'remember_token' => Str::random(10),
    ];
});
