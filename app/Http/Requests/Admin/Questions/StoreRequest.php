<?php

namespace App\Http\Requests\Admin\About;

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
            'name_am' => 'string|nullable',
            'name_ru' => 'string|nullable',
            'name_en' => 'string|nullable',
            'info_am' => 'string|nullable',
            'info_ru' => 'string|nullable',
            'info_en' => 'string|nullable',
        ];
    }
}
