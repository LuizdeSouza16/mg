<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
            'resume' => 'required|string|min:3|max:255',
            'post' => 'required|string|min:3|',
            'id_tag'=> 'nullable|numeric',
            'post_img' => 'nullable|image'
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
            'required' => 'Preencha o campo :attribute!',
            'resume.min' => 'O campo :attribute precisa de no mínimo de 3 caracteres',
        ];
    }
}
