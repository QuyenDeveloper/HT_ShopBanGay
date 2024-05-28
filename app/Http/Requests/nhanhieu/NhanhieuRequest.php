<?php

namespace App\Http\Requests\nhanhieu;

use Illuminate\Foundation\Http\FormRequest;

class NhanhieuRequest extends FormRequest
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
            'logo' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'vui lòng nhập tên thương hiệu!',
            'logo.required'=>'vui lòng nhập logo thương hiệu!',
        ];
    }

}
