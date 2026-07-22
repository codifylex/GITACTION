<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [
            'type' => [
                'required',
                'in:PF,PJ',
            ],

            'name' => [
                'required',
                'string',
                'max:150',
            ],

            'document' => [
                'required',
                'string',
                'max:20',
                'unique:suppliers,document,NULL,id,company_id,' . auth()->user()->company_id,
            ],

            'state_registration' => [
                'nullable',
                'string',
                'max:30',
            ],

            'email' => [
                'nullable',
                'email',
                'max:150',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:20',
            ],

            'mobile' => [
                'nullable',
                'string',
                'max:20',
            ],

            'zip_code' => [
                'nullable',
                'string',
                'max:10',
            ],

            'address' => [
                'nullable',
                'string',
                'max:255',
            ],

            'number' => [
                'nullable',
                'string',
                'max:20',
            ],

            'complement' => [
                'nullable',
                'string',
                'max:100',
            ],

            'district' => [
                'nullable',
                'string',
                'max:100',
            ],

            'city' => [
                'nullable',
                'string',
                'max:100',
            ],

            'state' => [
                'nullable',
                'string',
                'size:2',
            ],

            'active' => [
                'nullable',
                'boolean',
            ],
        ];
    }

    /**
     * Attribute names.
     */
    public function attributes(): array
    {
        return [
            'type' => 'tipo',
            'name' => 'nome',
            'document' => 'CPF/CNPJ',
            'state_registration' => 'inscrição estadual',
            'email' => 'e-mail',
            'phone' => 'telefone',
            'mobile' => 'celular',
            'zip_code' => 'CEP',
            'address' => 'endereço',
            'number' => 'número',
            'complement' => 'complemento',
            'district' => 'bairro',
            'city' => 'cidade',
            'state' => 'estado',
            'active' => 'ativo',
        ];
    }
}