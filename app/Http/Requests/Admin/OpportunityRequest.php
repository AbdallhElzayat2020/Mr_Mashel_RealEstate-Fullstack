<?php

namespace App\Http\Requests\Admin;

use App\Enums\OpportunityType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OpportunityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['required'],
            'years_of_exp' => ['required', 'integer'],
            'field_of_exp' => ['nullable', 'integer'],
            'education' => ['required'],
            'job_title' => ['nullable'],
            'type' => ['required', Rule::enum(OpportunityType::class)],
        ];
    }
}
