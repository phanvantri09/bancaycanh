<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required',
            'content' => 'required',
            'email' => 'required',
            'tel' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không để trống',
            'content.required' => 'Không để trống',
            'email.required' => 'Không để trống',
            'tel.required' => 'Không để trống',
        ];
    }
}
