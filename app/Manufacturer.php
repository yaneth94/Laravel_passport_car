<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $guarded = ['id'];

	public function models () {
		return $this->hasMany(ModelVehicle::class);
	}
}
