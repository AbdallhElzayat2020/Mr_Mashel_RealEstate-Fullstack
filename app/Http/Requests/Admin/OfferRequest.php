<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'short_title' => ['required'],
            'short_description' => ['required'],
            'price' => ['required'],
            'price_type' => ['required', 'integer'],
        ];
    }
}
