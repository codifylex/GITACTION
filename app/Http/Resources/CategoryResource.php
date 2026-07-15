<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transforma o recurso em array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'company_id' => $this->company_id,

            'name' => $this->name,

            'description' => $this->description,

            'active' => $this->active,

            'created_at' => optional($this->created_at)
                ->format('d/m/Y H:i'),

            'updated_at' => optional($this->updated_at)
                ->format('d/m/Y H:i'),
        ];
    }
}