<?php

namespace App\Http\Controllers;

use App\RentalStatus;
use Illuminate\Http\Request;
use App\Http\Resources\RentalStatusResource;

class RentalStatusController extends Controller
{
    public function index(){
    	return RentalStatusResource::collection(RentalStatus::all());
    }
}
