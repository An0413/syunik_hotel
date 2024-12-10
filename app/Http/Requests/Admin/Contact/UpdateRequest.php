<?php

namespace App\Http\Requests\Admin\Contact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'location_am' => 'string|nullable',
            'location_ru' => 'string|nullable',
            'location_en' => 'string|nullable',
            'phone' => 'string|nullable',
            'email' => 'string|nullable',
            'facebook' => 'string|nullable',
            'linkedin' => 'string|nullable',
            'instagram' => 'string|nullable',
            'contact_info_am' => 'string|nullable',
            'contact_info_ru' => 'string|nullable',
            'contact_info_en' => 'string|nullable',
        ];
    }
}
