<?php

namespace App\Http\Controllers;

use App\Rental;
use Illuminate\Http\Request;
use App\Http\Resources\RentalResource;

class RentalController extends Controller
{
    public function index(){
    	return RentalResource::collection(Rental::all());
    }
}
