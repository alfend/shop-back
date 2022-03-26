<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCategoryResource extends JsonResource
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
            'parent_category_id' => $this->parent_category_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'image' => $this->image ? 'http://svalka-back.im56.ru/'.$this->image : null,
            'sort' => $this->sort,
        ];
    }
}
