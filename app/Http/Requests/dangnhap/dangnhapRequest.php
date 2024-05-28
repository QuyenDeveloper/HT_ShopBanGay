<?php

namespace App\Http\Requests\dangnhap;

use Illuminate\Foundation\Http\FormRequest;

class dangnhapRequest extends FormRequest
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
            'email' => 'required|email:filter',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'vui lòng nhập email!',
            'password.required'=>'vui lòng nhập password!',
        ];
    }
}
