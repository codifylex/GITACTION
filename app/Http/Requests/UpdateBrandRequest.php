<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBrandRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:150',
                Rule::unique('brands')
                    ->where('company_id', auth()->user()->company_id)
                    ->ignore($this->brand),
            ],

            'description' => [
                'nullable',
                'max:500',
            ],

            'active' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}