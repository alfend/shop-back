<?php

namespace App\Http\Requests;

use App\Banner;
use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['string'],
            'mobile_image' => ['string'],
            'order' => ['required', 'integer'],
            'status' => ['required', 'integer', 'in:' . Banner::STATUS_ACTIVE . ',' . Banner::STATUS_INACTIVE],
            'href' => ['string', 'nullable'],
            'type' => ['sometimes','integer', 'required']
        ];
    }
}
