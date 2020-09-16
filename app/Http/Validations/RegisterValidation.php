<?php

namespace App\Http\Validations;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email,' . $this->user,
            'username' => 'required|unique:users,username,' . $this->user,
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Không được để trống',
            'email.email' => 'Phải là email',
            'email.unique' => 'Email đã bị trùng',
            'username.required' => 'Không được để trống',
            'username.unique' => 'Username đã bị trùng',
            'password.required' => 'Không được để trống',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            'password.confirmed' => 'Mật khẩu xác nhận lại không chính xác',
        ];
    }
}
