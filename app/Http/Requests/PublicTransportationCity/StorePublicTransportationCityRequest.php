<?php

namespace App\Http\Requests\PublicTransportationCity;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicTransportationCityRequest extends FormRequest
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
        'price' => ['required'],
        'type' => ['required'],
        'city_from' => ['nullable','date'],
        'city_to' => ['nullable','date'],
        'status' => ['nullable'],
        'sort' => ['nullable'],
        ];
    }
}