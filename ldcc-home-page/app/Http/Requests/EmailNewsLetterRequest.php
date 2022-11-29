<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailNewsLetterRequest extends FormRequest
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

    public function rules()
    {
        return [
            'email' => 'required|email|max:255',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Cần nhập email',
            'email.email' => 'Định dạng email không đúng'
        ];
    }
}
