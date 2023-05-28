<?php
namespace App\Http\Requests\Admin\Users;


use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        'name.*' => ['required','unique:users,slug','max:255','min:2'],
        'email' => ['required','max:255','min:2','email','unique:users,email'],
        'address' => ['nullable'],
        'mobile' => ['nullable','min:9','max:55'],
        'gender' => ['nullable'],
        'country_id' => ['nullable'],
        'city_id' => ['nullable'],
        'district_id' => ['nullable'],
        'password' => 'required|same:confirm-password|min:2|max:255',
        'status' => ['nullable'],
        'image'=>['nullable','mimes:png,jpg,jpeg'],
        ];
    }

}
