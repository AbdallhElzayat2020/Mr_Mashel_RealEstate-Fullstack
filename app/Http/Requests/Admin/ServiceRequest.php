<?php

namespace App\Http\Requests\Admin;

use App\Enums\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'contact_number' => ['required', 'string', 'max:254'],
            'status' => ['required', Rule::enum(Status::class)],
            'title.ar' => ['required', 'string', 'max:254'],
            'title.en' => ['required', 'string', 'max:254'],
            'short_description.ar' => ['required', 'string', 'max:65535'],
            'short_description.en' => ['required', 'string', 'max:65535'],
            'description.ar' => ['required', 'string'],
            'description.en' => ['required', 'string'],
            'features' => ['required', 'array', 'min:1'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title.ar' => __('Title'),
            'title.en' => __('Title'),
            'short_description.ar' => __('Title'),
            'short_description.en' => __('Title'),
            'description.ar' => __('Description'),
            'description.en' => __('Description'),
            'features' => __('Features'),
            'features.*' => __('Features'),
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('status')) {
            $this->merge(['status' => Status::ACTIVE->value]);
        } else {
            $this->merge(['status' => Status::INACTIVE->value]);
        }
    }
}
