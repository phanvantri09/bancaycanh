<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
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
            // 'email' => 'required',
            'tel' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không để trống',
            'content.required' => 'Không để trống',
            // 'email.required' => 'Không để trống',
            'tel.required' => 'Không để trống',
        ];
    }
}
