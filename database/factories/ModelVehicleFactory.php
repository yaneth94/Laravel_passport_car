<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelVehicle;
use Faker\Generator as Faker;

$factory->define(ModelVehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'daily_hire_rate' => $faker->randomFloat(2, 10, 100)
    ];
});
