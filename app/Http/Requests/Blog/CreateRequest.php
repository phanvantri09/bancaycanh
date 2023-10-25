<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|unique:products',
            'content_pre' => 'required',
            'id_category' => 'required',
            // 'id_category_item' => 'required',
            // 'img' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không để trống',
            'name.unique' => 'Đã tồn tại',
            'id_category.required' => 'Không để trống',
            // 'id_category_item.required' => 'Không để trống',
            // 'img.required' => 'Không để trống',
            'content_pre.required' => 'Không để trống',
        ];
    }
}
