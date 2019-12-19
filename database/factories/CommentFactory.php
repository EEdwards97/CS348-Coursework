<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'user_id' => User::all()->random()->id,
        'comment_content' => $faker->realText($maxNBChars = 250, $indexSize = 2),
    ];
});
