<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVehicle extends Model
{
    protected $guarded = ['id'];

	public function vehicles () {
		return $this->hasMany(Vehicle::class);
	}
}
