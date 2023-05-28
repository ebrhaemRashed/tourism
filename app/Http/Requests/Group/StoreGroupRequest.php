<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
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
            'name.*' => ['required','unique:groups,slug','max:255','min:2'],
            'description.*'=>['nullable'],
            'must_seen'=>['nullable'],
            'status'=>['nullable'],
            'sort'=>['nullable'],
        ];
    }
}