<?php

namespace App\Http\Validations;

use Illuminate\Foundation\Http\FormRequest;

class CourseValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'numeric',
            'ava' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'phone.numeric' => 'Yêu cầu nhập số',
            'ava.image' => 'Phải là hình ảnh',
        ];
    }
}
