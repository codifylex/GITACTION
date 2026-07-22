<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnitRequest extends FormRequest
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
                'unique:units,name,NULL,id,company_id,' . auth()->user()->company_id,
            ],

            'symbol' => [
                'required',
                'max:20',
                'unique:units,symbol,NULL,id,company_id,' . auth()->user()->company_id,
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