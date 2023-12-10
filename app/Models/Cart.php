<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    public $fillable = [
        'user_id',
        'product_ids',
        'sum',
        'status'
    ];

    public $casts = [
        'product_ids' => 'array'
    ];

    public function getProducts()
    {
        $array = [];
        for ($i = 0; $i < count($this->product_ids); $i++) {
            $product = Products::find($this->product_ids[$i]);
            if ($product) {
                $array[] = $product;
            }
        }
        return $array;
    }
}

;
