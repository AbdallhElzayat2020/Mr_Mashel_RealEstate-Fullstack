<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

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
        ];
    }
}
