<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded = ['id'];

	public function rentals () {
		return $this->hasMany(Rental::class);
	}

	public function model_vehicle () {
		return $this->belongsTo(ModelVehicle::class);
	}

	public function location () {
		return $this->belongsTo(Location::class);
	}

	public function type_vehicle () {
		return $this->belongsTo(TypeVehicle::class);
	}
}
