<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customerId' => $this->customer_id,
            'nombre' => $this->nombre,
            'especie' => $this->especie,
            'edad' =>$this->edad,
            'genero' =>$this->genero
        ];
    }
}
