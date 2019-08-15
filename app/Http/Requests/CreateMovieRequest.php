<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'title' => 'required|max:100',
            'year' => 'required|min:4|numeric',
            'score' => '',
            'description' => '',
            'duration' => '',
            'genres' => 'required',
            'casts' => 'required',
            'trailer_url' => 'url|nullable',
            'poster_url' => 'url|nullable',
        ];
    }
}
