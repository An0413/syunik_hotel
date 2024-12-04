<?php

namespace App\Http\Requests\Admin\Questions;

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
            'question_am' => 'string|nullable',
            'question_ru' => 'string|nullable',
            'question_en' => 'string|nullable',
            'answer_am' => 'string|nullable',
            'answer_ru' => 'string|nullable',
            'answer_en' => 'string|nullable',
        ];
    }
}
