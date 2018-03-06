<?php

use Faker\Generator as Faker;

$factory->define(App\Muldev\Cms\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'body' => $faker->randomHtml(2,3)
    ];
});
