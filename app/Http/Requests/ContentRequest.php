<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'topic' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ];
    }

    /**
     * Get the custom messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'topic.required' => 'Please enter a topic.',
            'description.required' => 'Please enter a description.',
            'tags.required' => 'Please enter tags.',
        ];
    }
}
