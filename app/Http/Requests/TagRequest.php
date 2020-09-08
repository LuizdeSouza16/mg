<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'tag' => 'required|min:3'
        ];
    }

    /**
     * Get the messages to form .
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'The :atribbute fild can not be empty',
        ];
    }
}
