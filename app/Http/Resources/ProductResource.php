<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'category_id' => $this->category_id,
            'category_title' => $this->category ? $this->category->title : null,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'image' => $this->image ? 'http://svalka-back.im56.ru/'.$this->image : null,
            'price' => $this->price,
            'old_price' => $this->old_price,
            'discount' => $this->discount,
            'type' => $this->type,
            'sort' => $this->sort,
            'on_main' => $this->on_main,
        ];
    }
}
