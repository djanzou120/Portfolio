<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:project|max:120',
            'technology' => 'required|max:40',
            'company' => 'required|max:40',
            'moment' => 'required|date|max:40',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2024'
        ];
    }
}
