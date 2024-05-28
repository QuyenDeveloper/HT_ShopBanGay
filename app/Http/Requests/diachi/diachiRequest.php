<?php

namespace App\Http\Requests\diachi;

use Illuminate\Foundation\Http\FormRequest;

class diachiRequest extends FormRequest
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
            'hoten' => 'required',
            'sdt' => 'required',
            'daichi' => 'required',
            'loaiDC' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'hoten.required'=>'vui lòng nhập Họ và tên!',
            'sdt.required'=>'vui lòng nhập số điện thoại!',
            'daichi.required'=>'vui lòng nhập địa chỉ!',
            'loaiDC.required'=>'vui lòng chọn loại địa chỉ!',
        ];
    }
}
