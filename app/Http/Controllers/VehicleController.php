<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Resources\VehicleResource;

class VehicleController extends Controller
{
    public function index(){
    	return VehicleResource::collection(Vehicle::all());
    }
    
    public function show ($id) {
		return new VehicleResource(Vehicle::find($id));
	}
}
