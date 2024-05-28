<?php

namespace App\Http\Requests\timkiem;

use Illuminate\Foundation\Http\FormRequest;

class timKiemRequest extends FormRequest
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
            //
            'timKiemSP' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'timKiemSP.required'=>'vui lòng nhập sản phẩm cần tìm!',
        ];
    }
}
