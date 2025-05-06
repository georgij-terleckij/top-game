<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'meta_title' => $faker->name,
        'text' => $faker->text(1000),
        'img' => '1.jpeg',
        'publisher_id' => '1',
        'developer_id' => '1',
        'in_rating' => 1,
        'created_user_id' => '1'
    ];
});

