<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string'],
            'status' => ['required', 'string'],
            'category_id' => ['required', 'string', 'max:255'],
            'file' => ['required', 'string'],
            'cover' => ['required', 'String'],
            'user_id' => ['required', 'string', 'max:255'],
            'author_id' => ['required', 'string', 'max:255'],
        ];
    }
}
