<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Data::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence(),
        'fingerprint' => $this->faker->randomNumber(10, true),
        'create_at' => $this->faker->dateTimeBetween('-15 years','now'),
        'author' => $this->faker->title(),
        'years' => $this->faker->paragraph(),
        'type' => $this->faker->fileExtension(),

    ];
});
