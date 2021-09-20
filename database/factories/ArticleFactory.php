<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'user_id' => factory(\App\User::class), //Generates a User from factory and extracts id
        'title' => $this->faker->sentence, //Generates a fake sentence
        'excerpt' => $this->faker->sentence, //Generates a fake sentence
        'body' => $this->faker->paragraph, //generates fake 30 paragraphs
    ];
});
