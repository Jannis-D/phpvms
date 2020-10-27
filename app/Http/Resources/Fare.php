<?php

namespace App\Http\Resources;

use App\Contracts\Resource;

/**
 * @mixin \App\Models\Fare
 */
class Fare extends Resource
{
    public function toArray($request)
    {
        return [
            'id'       => $this->id,
            'code'     => $this->code,
            'name'     => $this->name,
            'capacity' => $this->capacity,
            'cost'     => $this->cost,
            'price'    => $this->price,
            'type'     => $this->type,
            'notes'    => $this->notes,
            'active'   => $this->active,
        ];
    }
}
