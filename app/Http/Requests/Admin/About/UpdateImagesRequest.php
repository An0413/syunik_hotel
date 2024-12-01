<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImagesRequest extends FormRequest
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
            'seq'=>'numeric|nullable',
            'title_am' => 'string|nullable',
            'title_ru' => 'string|nullable',
            'title_en' => 'string|nullable',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif',
        ];
    }
}
