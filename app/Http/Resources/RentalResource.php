<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RentalResource extends JsonResource
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
            "cliente" => new CustomerResource($this->customer),
            'status' => new RentalStatusResource($this->rental_status),
            "vehiculo" => new VehicleResource($this->vehicle),
            "desde" => Carbon::createFromFormat('Y-m-d H:i:s', $this->from)->format('d-m-Y H:i:s'),
            "hasta" => Carbon::createFromFormat('Y-m-d H:i:s', $this->to)->format('d-m-Y H:i:s'),
        ];
    }
}
