<?php

namespace App\Http\Requests;

use App\Models\Cart;
use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function createCart(): Cart
    {
        $cart = $this->fillCart(new Cart());
        return $cart;
    }

    public function updateCart(Cart $cart): Cart
    {
        return $this->fillCart($cart);
    }

    public function rules()
    {
        return [
                'user_id' => 'required|integer',
                'product_ids' => 'required|array',
                'sum' => 'nullable',
                'status' => 'nullable|string|max:255'
            ];
    }

    public function fillCart(Cart $cart): Cart
    {
        $cart->user_id = $this->user_id;
        $cart->product_ids = $this->product_ids;
        $cart->sum = $this->sum;
        $cart->status = $this->status;
        $cart->save();

        return $cart;
    }
}
