<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'in:News,Event,Achievement'],
            'event_date' => ['required', 'date'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'short_description' => ['required', 'string', 'max:1000'],
            'content' => ['required', 'string'],
            'is_published' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'category.required' => 'Please select a valid category (News, Event, or Achievement).',
            'category.in' => 'Category must be one of: News, Event, or Achievement.',
            'event_date.required' => 'Please provide the event date.',
            'event_date.date' => 'The event date must be a valid date.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: JPG, PNG, or WebP.',
            'image.max' => 'The image size cannot exceed 2 MB.',
            'short_description.required' => 'Please provide a short description.',
            'content.required' => 'The detailed content field is required.',
        ];
    }
}
