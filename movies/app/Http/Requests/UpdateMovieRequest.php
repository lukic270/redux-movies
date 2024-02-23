<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|max:255|min:3',
             'director' => 'string|max:50|min:3',
              'image' => 'string', 
              'duration' => 'integer', 
              'releaseDate' => 'date',
               'genre' => 'string|max:30|min:5'
        ];
    }
}
