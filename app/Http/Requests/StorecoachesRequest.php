<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecoachesRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'certifications' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'string', 'max:255'],
            'training_approach' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ];
    }
}
