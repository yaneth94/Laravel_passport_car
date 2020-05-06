<?php

namespace App\Http\Controllers;

use App\ModelVehicle;
use Illuminate\Http\Request;
use App\Http\Resources\ModelVehicleResource;

class ModelVehicleController extends Controller
{
     public function index(){
    	return ModelVehicleResource::collection(ModelVehicle::all());
    }
}
