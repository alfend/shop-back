<?php

namespace App\Http\Requests;

use App\Catalog;
use Illuminate\Foundation\Http\FormRequest;

class CatalogRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'code' => ['required', 'string'],
            'branch_id' => ['required', 'integer'],
            'status' => ['required', 'integer', 'in:' . Catalog::STATUS_ACTIVE . ',' . Catalog::STATUS_INACTIVE],
        ];
    }
}
