<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current' => 'required',
            'password'     => 'required|min:8|confirmed|regex:"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"',
        ];
    }
	
	 public function messages()
    {
        return [
            'password.regex' => 'Password must contain at least 1 uppercase letter and 1 number.',
        ];
    }
	
}
