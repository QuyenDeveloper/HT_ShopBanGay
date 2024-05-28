<?php

namespace App\Http\Requests\dangky;

use Illuminate\Foundation\Http\FormRequest;

class dangkyRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email:filter',
            'password' => 'required',
            'password1' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'vui lòng nhập tên!',
            'email.required'=>'vui lòng nhập email!',
            'password.required'=>'vui lòng nhập password!',
            'password1.required'=>'vui lòng nhập lại password!',
        ];
    }
}
