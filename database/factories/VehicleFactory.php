<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'model_vehicle_id' => \App\ModelVehicle::all()->random()->id,
		'location_id' => \App\Location::all()->random()->id,
		'type_vehicle_id' => \App\TypeVehicle::all()->random()->id,
		'current_kilometers' => $faker->randomNumber(5),
		'engine_size' => $faker->randomFloat(1, 1, 3),
		'fuel_type' => $faker->randomElement(['GASOIL', 'GASOLINE', 'ELECTRIC'])
    ];
});
