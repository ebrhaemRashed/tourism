<?php

namespace App\Http\Requests\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
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
        $id= Request()->segment(4);
        return [
            'name.*' => ['required','unique:hotel_apartments,slug,'.$id,'max:255','min:2'],
            'description.*' => ['nullable'],
            'country_id' => ['nullable'],
            'city_id' => ['nullable'],
            'district_id' => ['nullable'],
            'stars' => ['nullable'],
            'rooms' => ['nullable'],
            'price' => ['nullable'],
            'typing_live' => ['nullable'],
            'type' => ['nullable'],
            'status' => ['nullable'],
            'sort' => ['nullable'],
        ];
    }
}
