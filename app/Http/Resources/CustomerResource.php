<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PetResource;

class CustomerResource extends JsonResource
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
            'nombre' => $this->nombre,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'telefono' =>$this->telefono,
            'pet' => PetResource::collection($this->whenLoaded('pets'))
        ];
    }
}
