<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'content' => 'required',
            'tgian' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'vui lòng nhập tên!!',
            'content.required'=>'vui lòng nhập NỘI DUNG!!',
            'tgian.required'=>'vui lòng chọn thời gian!!',

        ];
    }
}
