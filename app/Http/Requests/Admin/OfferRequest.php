<?php

namespace App\Http\Requests\Admin;

use App\Enums\OfferPriceType;
use App\Enums\PropertyLocations;
use App\Enums\PropertyStatus;
use App\Enums\PropertyType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:254'],
            'description' => ['required', 'string'],
            'short_title' => ['required', 'string', 'max:254'],
            'short_description' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'price_type' => ['required', Rule::enum(OfferPriceType::class)],
            'is_active' => ['required', 'boolean'],
            'status' => ['required', Rule::enum(PropertyStatus::class)],
            'type' => ['required', Rule::enum(PropertyType::class)],
            'location' => ['required', Rule::enum(PropertyLocations::class)],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_active' => $this->input('is_active') === 'on',
        ]);
    }
}
