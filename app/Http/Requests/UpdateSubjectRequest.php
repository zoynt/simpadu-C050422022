<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
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
                'semester' => 'string|max:80',
                'lecturer_id' => 'string|max:80',
                'academic_year' => 'string|max:80',
                'sks' => 'integer',
                'code' => 'string|max:8',
                'description' => 'string',
            ];
    }
}
