<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Resources\ManufacturerResource;

class ManufacturerController extends Controller
{
    public function index(){
    	return ManufacturerResource::collection(Manufacturer::all());
    }

    public function store () {
		if (request()->ajax()) {
			try {
				$this->validate( request(), [
					'nombre' => 'required|min:2',
					'detalles' => 'required'
				]);

				$manufacturer = Manufacturer::create([
					'name' => request('nombre'),
					'details' => request('detalles')
				]);

				return response()->json(['message' => 'Fabricante creado', 'identificador' => $manufacturer->id]);

			} catch ( ValidationException $e ) {
				return response()->json($e->validator->errors());
			}
		}
		abort( 401);
	}
}
