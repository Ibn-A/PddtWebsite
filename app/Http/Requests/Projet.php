<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Projet extends FormRequest
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
            'author' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'sub_title' => ['required', 'string', 'max:100'],
            'article' => ['required', 'string', 'max:100'],
            'sub_article' => ['required', 'string', 'max:100'],
        ];
    }
}
