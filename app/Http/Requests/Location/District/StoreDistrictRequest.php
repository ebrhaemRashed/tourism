<?php

namespace App\Http\Requests\Location\District;

use Illuminate\Foundation\Http\FormRequest;

class StoreDistrictRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name.*' => ['required','unique:districts,slug','max:255','min:2'],
            'city_id' => ['required'],
            'status' => ['nullable'],
        ];
    }
}