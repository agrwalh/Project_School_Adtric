<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdmissionEnquiryRequest extends FormRequest
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
            'parent_name' => ['required', 'string', 'max:255'],
            'student_name' => ['required', 'string', 'max:255'],
            'class_applying_for' => ['required', 'string', 'max:100'],
            'mobile' => [
                'required',
                'string',
                'regex:/^[6-9]\d{9}$/',
            ],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'parent_name.required' => 'Please provide the parent or guardian name.',
            'student_name.required' => 'Please provide the student name.',
            'class_applying_for.required' => 'Please select the class or programme of interest.',
            'mobile.required' => 'Mobile number is required.',
            'mobile.regex' => 'Mobile must be a valid 10-digit Indian number starting with 6, 7, 8, or 9.',
            'email.email' => 'Please enter a valid email address.',
            'message.max' => 'Message cannot exceed 2000 characters.',
        ];
    }
}
