<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $guarded = ['id'];

	public $timestamps = false;

	public function vehicle () {
		return $this->belongsTo(Vehicle::class);
	}

	public function customer () {
		return $this->belongsTo(Customer::class);
	}

	public function rental_status () {
		return $this->belongsTo(RentalStatus::class);
	}
}
