<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'seq' => 'numeric|required',
            'lang_id' => 'numeric|required',
            'info' => 'string|nullable',
            'meta_keyword' => 'string|nullable',
            'meta_description' => 'string|nullable',
            'name' => 'string|nullable',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'video' => 'nullable|mimetypes:video/mp4,video/mpeg,video/quicktime|max:512000',
        ];
    }
}
