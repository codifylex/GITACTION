<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUnitRequest extends FormRequest
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
                Rule::unique('units')
                    ->where('company_id', auth()->user()->company_id)
                    ->ignore($this->unit),
            ],

            'symbol' => [
                'required',
                'max:20',
                Rule::unique('units')
                    ->where('company_id', auth()->user()->company_id)
                    ->ignore($this->unit),
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

    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'symbol' => 'símbolo',
            'description' => 'descrição',
            'active' => 'ativo',
        ];
    }
}