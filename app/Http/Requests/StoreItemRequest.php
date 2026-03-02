<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:32',
            'description' => 'nullable|string',
            'price' => 'required|min:1|max:6|regex:/^\d{1,3}([,\.]\d{2})?$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
