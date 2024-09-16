<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createOrUpdateMangaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Set this to true to allow the request
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:225|unique:mangas,title,' . $this->manga?->id,
            'author' => 'required|max:225|unique:mangas,author,' . $this->manga?->id,
            'rating' => 'required|max:10',
            'description' => 'required',
            'genre_id' => 'required|exists:genres,id',
        ];
    }
}

