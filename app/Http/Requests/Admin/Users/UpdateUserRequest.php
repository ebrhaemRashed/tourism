<?php
namespace App\Http\Requests\Admin\Users;


use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        'name.*' => ['required','unique:users,slug,'.$id,'max:255','min:2'],
        'status' => ['nullable'],
        'email' => 'required|email|unique:admins,email,'.$id,
        'password' => 'same:confirm-password',
        'roles' => ['nullable'],
        'image'=>['nullable','mimes:png,jpg,jpeg'],
        ];
    }
}
