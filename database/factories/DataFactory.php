<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data;
use Faker\Generator as Faker;

$factory->define(Data::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence(),
        'fingerprint' => $this->faker->randomNumber(5, true),
        'author' => $this->faker->name(),
        'years' => $this->faker->year(),
        'type' => $this->faker->fileExtension("pdf","docx","xml"),    ];
});
