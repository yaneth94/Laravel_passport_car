<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];

	public function rentals () {
		return $this->hasMany(Rental::class);
	}

	public function user () {
		return $this->belongsTo(User::class);
	}
}
