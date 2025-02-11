<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceFeatureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'service_id' => ['required', 'exists:services'],
            'feature' => ['required'],
        ];
    }

    public function attributes(): array
    {
        return [
            'service_id' => 'الخدمة',
            'feature' => 'الميزة',
        ];
    }
}
