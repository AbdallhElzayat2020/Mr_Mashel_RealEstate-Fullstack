<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title.ar' => ['required', 'string', 'max:254'],
            'title.en' => ['required', 'string', 'max:254'],
            'details.ar' => ['required', 'string', 'max:254'],
            'details.en' => ['required', 'string', 'max:254'],
            'description.ar' => ['required', 'string', 'max:254'],
            'description.en' => ['required', 'string', 'max:254'],
            'features' => ['required', 'array', 'min:1'],
            'features.*' => ['required', 'string', 'max:254'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title.ar' => __('Title'),
            'title.en' => __('Title'),
            'details.ar' => __('Title'),
            'details.en' => __('Title'),
            'description.ar' => __('Description'),
            'description.en' => __('Description'),
            'features' => __('Features'),
            'features.*' => __('Features'),
        ];
    }
}
