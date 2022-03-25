<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return true;//backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name' => 'required|min:5|max:255'
            'category_id' => ['integer', 'required', 'exists:product_categories,id'],
            'title' => ['required', 'string'],
            'slug' => ['string', 'nullable'],
            'description' => ['string', 'nullable'],
            'image' => ['string', 'nullable'],
            'price' => ['numeric', 'required'],
            'old_price' => ['numeric', 'nullable'],
            'discount' => ['string', 'nullable'],
            'sort' => ['integer'],
            'on_main' => ['required', 'boolean'],
            /*'prices.*.branch_id' => ['required', 'integer'],
            'prices.*.discount' => ['required', 'string'],
            'prices.*.old_price' => ['required', 'string'],
            'prices.*.price' => ['required', 'string'],
            */
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
