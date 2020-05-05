<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(\App\User::class, 1)->create([
		    'email' => 'admin@m.com',
		    'password' => bcrypt('secret')
	    ]);

        factory(\App\User::class, 10)->create()->each(function (\App\User $user) {
		    factory(\App\Customer::class, 1)->create(['user_id' => $user->id]);
	    });

	    factory(\App\TypeVehicle::class, 1)->create(['name' => 'COCHE']);
	    factory(\App\TypeVehicle::class, 1)->create(['name' => 'MOTO']);

	    factory(\App\Location::class, 15)->create();
	    //se crea 10 facbricantes y por cada fabricante se crea un modelo de vehiculo
	    //y 5 vehiculos por cada modelo de vehiculo
	    factory(\App\Manufacturer::class, 10)->create()->each(function (\App\Manufacturer $manufacturer) {
		    factory(\App\ModelVehicle::class, 1)->create([ 'manufacturer_id' => $manufacturer->id]);
		    factory(\App\Vehicle::class, 5)->create();
	    });

	    factory(\App\RentalStatus::class, 1)->create(['status' => 'RENTED']);
	    factory(\App\RentalStatus::class, 1)->create(['status' => 'AVAILABLE']);

	    factory(\App\Rental::class, 50)->create();
    }
}
