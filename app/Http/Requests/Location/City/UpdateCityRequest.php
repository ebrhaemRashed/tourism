<?php

namespace App\Http\Requests\Location\City;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
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
            'name.*' => ['required','unique:cities,slug,'.$id,'max:255','min:2'],
            'country_id' => ['required'],
            'status' => ['nullable'],
        ];
    }
}
