<?php

namespace App\Http\Requests\Trangchu;

use App\Models\theloai;
use Illuminate\Foundation\Http\FormRequest;

class trangchuRequest extends FormRequest
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
//            'mail' => 'required',
        ];
    }

//    public function messages()
//    {
//        return [
//            'mail.required' => 'vui lòng nhập mail!!',
//        ];
//    }
}
