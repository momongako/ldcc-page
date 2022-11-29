<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * バリデーション規則。
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'company' => 'nullable|max:255',
            'email' => 'required|email|max:255',
            'body' => 'required|max:5000',
        ];
    }

    public function attributes() {
        return [
            'type' => 'お問い合わせ種類',
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'gender' => '性別',
            'body' => '内容'
        ];
    }

    /**
     * 定義済みバリデーション規則のエラーメッセージ。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'last_name.required' => 'お名前（姓）を入力してください。',
            'last_name.max' => 'お名前（姓）を:max文字以内で入力してください。',
            'first_name.required' => 'お名前（名）を入力してください。',
            'first_name.max' => 'お名前（名）を:max文字以内で入力してください。',
            'company.max' => ':max文字以内で入力してください。',
            'email.required' => '入力してください。',
            'email.email' => '不正なメールアドレスです。',
            'body.required' => '入力してください。',
            'body.max' => ':max文字以内で入力してください。',
        ];
    }
}
