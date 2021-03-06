<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|regex:/^[a-zA-Z0-9_]+$/|max:30|unique:users,username,'.$this->user()->id,
        ];
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'regex' => 'Only use letters, numbers and underscores for username.',
        ];
    }
}
