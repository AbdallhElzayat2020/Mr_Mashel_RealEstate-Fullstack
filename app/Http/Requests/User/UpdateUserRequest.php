<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:254'],
            'email' => ['required', 'email', 'max:254', Rule::unique(User::class, 'email')->ignoreModel($this->user)],
        ];
    }
}
