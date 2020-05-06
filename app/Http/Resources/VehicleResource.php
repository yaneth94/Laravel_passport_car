<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'identificador' => $this->id,
            'modelo' => new ModelVehicleResource($this->model_vehicle),
            'location' => new LocationResource($this->location),
            'tipo'=> new TypeVehicleResource($this->type_vehicle),
            'kilometro_actual' => $this->current_kilometers,
            'tamaño_maquina' => $this->engine_size,
            'tipo_combustible' => $this->fuel_type,
            "fecha_creacion" => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y')
        ];
    }
}
