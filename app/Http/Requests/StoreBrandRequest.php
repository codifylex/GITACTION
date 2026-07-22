<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
                'unique:brands,name,NULL,id,company_id,' . auth()->user()->company_id,
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