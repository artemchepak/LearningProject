<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovie extends FormRequest
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
            'name' => 'required|max:255',
            'country' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'description' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Hey! You have to fill in the :attribute field.',
            'country.required' => 'Hey! You have to fill in the :attribute field.',
            'release_year.required' => 'Hey! You have to fill in the :attribute field.',
            'genre.required' => 'Hey! You have to fill in the :attribute field.',
        ];
    }
}
