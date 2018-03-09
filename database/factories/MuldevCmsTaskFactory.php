<?php

use Faker\Generator as Faker;

$factory->define(App\Muldev\Cms\Task::class,
    function (Faker $faker) {
        return [
            'name' => $faker->domainName,
            'description' => $faker->sentence,
            'completed' => false,
            'wip' =>  $faker->boolean
        ];
    });
