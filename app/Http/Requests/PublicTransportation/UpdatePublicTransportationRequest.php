<?php

namespace App\Http\Requests\PublicTransportation;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublicTransportationRequest extends FormRequest
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
        'country_id' => ['nullable'],
        'city_id' => ['nullable'],
        'district_id' => ['nullable'],
        'days' => ['required'],
        'price' => ['required'],
        'status' => ['nullable'],
        'sort' => ['nullable'],
        ];
    }
}
