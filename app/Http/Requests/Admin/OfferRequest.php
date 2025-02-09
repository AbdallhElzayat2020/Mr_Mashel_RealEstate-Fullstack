<?php

namespace App\Http\Requests\Admin;

use App\Enums\OfferPriceType;
use App\Enums\OfferType;
use App\Enums\PropertyLocations;
use App\Enums\PropertyType;
use App\Enums\Status;
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
            'title' => ['required', 'array'],
            'short_title' => ['required', 'array'],
            'description' => ['required', 'array'],
            'short_description' => ['required', 'array'],
            'property_specifications' => ['required', 'array'],
            'property_contents' => ['required', 'array'],
            'property_features' => ['required', 'array'],
            'financial_communication' => ['required', 'array'],
            'price' => ['required', 'numeric'],
            'price_type' => ['required', Rule::enum(OfferPriceType::class)],
            'status' => ['required', Rule::enum(Status::class)],
            'offer_type' => ['required', Rule::enum(OfferType::class)],
            'property_type' => ['required', Rule::enum(PropertyType::class)],
            'location' => ['required', Rule::enum(PropertyLocations::class)],
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
