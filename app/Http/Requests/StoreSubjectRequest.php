<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
            'title' => 'required|string|max:80',
            'semester' => 'required|string|max:80',
            'lecturer_id' => 'required|string|max:80',
            'academic_year' => 'required|string|max:80',
            'sks' => 'required|string|max:80',
            'code' => 'required|string|max:80',
            'description' => 'required|string|max:80',
        ];
    }
}
