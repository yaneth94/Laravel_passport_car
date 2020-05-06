<?php

namespace App\Http\Controllers;

use App\TypeVehicle;
use Illuminate\Http\Request;
use App\Http\Resources\TypeVehicleResource;

class TypeVehicleController extends Controller
{
    public function index(){
    	return TypeVehicleResource::collection(TypeVehicle::all());
    }
}
