<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'admin_id' => ['required', 'exists:admins'],
            'content' => ['required'],
            'excerpt' => ['required'],
        ];
    }
}
