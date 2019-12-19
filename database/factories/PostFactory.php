<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'id' => User::all()->random()->id,
        'post_title' => $faker->realText($maxNBChars = 60, $indexSize = 2),
        'post_content' => $faker->realText($maxNBChars = 1000, $indexSize = 2),
    ];
});
