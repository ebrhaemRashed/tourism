<?php

namespace App\Http\Requests\Admin\Admins;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
        'name.*' => ['required','max:255','min:2'],
        'status' => ['nullable'],
        'email' => ['required','max:255','min:2','email','unique:admins,email'],
        'password' => 'required|same:confirm-password|min:2|max:255',
        'roles' => ['nullable'],
        'image'=>['nullable','mimes:png,jpg,jpeg'],
        ];
    }

}
