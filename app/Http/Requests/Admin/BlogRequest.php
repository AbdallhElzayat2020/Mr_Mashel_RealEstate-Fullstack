<?php

namespace App\Http\Requests\Admin;

use App\Enums\BlogStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status' => ['required', Rule::enum(BlogStatus::class)],

            'title.ar' => ['required', 'string', 'max:254'],
            'title.en' => ['required', 'string', 'max:254'],

            'excerpt.ar' => ['required', 'string', 'max:65535'],
            'excerpt.en' => ['required', 'string', 'max:65535'],

            'content.ar' => ['required', 'string'],
            'content.en' => ['required', 'string'],
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('status')) {
            $this->merge(['status' => BlogStatus::ACTIVE->value]);
        } else {
            $this->merge(['status' => BlogStatus::INACTIVE->value]);
        }
    }
}
