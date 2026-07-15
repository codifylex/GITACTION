<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    /**
     * Transforma a coleção.
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => CategoryResource::collection($this->collection),
        ];
    }

    /**
     * Informações adicionais.
     */
    public function with(Request $request): array
    {
        return [
            'success' => true,
        ];
    }
}