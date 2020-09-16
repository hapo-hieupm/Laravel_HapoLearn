<?php

namespace App\Http\Validations;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'login_username' => 'required',
            'login_password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'login_username.required' => 'Username không được để trống',
            'login_password.required' => 'Password không được để trống',
        ];
    }
}
