<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'user_id' => $this->user_id,
            'product_ids' => $this->product_ids,
            'products' => $this->getProducts(),
            'sum' => $this->sum,
            'status' => $this->status
        ];
        return $data;
    }
}
