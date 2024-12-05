<?php

namespace App\Http\Requests\Admin\Rooms;

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
            'info_am' => 'string|nullable',
            'info_ru' => 'string|nullable',
            'info_en' => 'string|nullable',
            'capacity' => 'numeric|required',
            'childs' => 'numeric|required',
            'type_id' => 'numeric|required',
            'floor' => 'numeric|required',
            'price' => 'numeric|required',
            'discount' => 'numeric|required',
            'number' => 'numeric|required',
            'surface' => 'numeric|required',
            'booking' => 'string|nullable',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        ];
    }
}
