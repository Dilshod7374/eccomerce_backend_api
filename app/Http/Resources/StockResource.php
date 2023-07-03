<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'quantity' => $this->quantity,
            'color' => 'red',
            'material' => 'MDF',
        ];
    }
}