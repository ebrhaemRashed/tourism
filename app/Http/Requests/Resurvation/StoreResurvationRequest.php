<?php

namespace App\Http\Requests\Resurvation;

use Illuminate\Foundation\Http\FormRequest;

class StoreResurvationRequest extends FormRequest
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
        'user_id' => ['required'],
        'answer_id' => ['required'],
        'question_id' => ['required'],
        'value_of_answer'=>['nullable']
        ];
    }
}