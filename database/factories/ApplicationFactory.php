<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence(1,3),
        'description' => $faker->paragraph(),
        'category_id' => $faker->numberBetween(1, 9),
        'status_id' => $faker->numberBetween(1,3),
        'user_id' => $faker->numberBetween(1,3),
        'created_at' => $faker->dateTimeThisDecade(),
        'photo_before' => 'кит.jpg',
        'photo_after' => 'example.png',
    ];
});
