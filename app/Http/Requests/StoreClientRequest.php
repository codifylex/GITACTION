<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', \App\Models\Client::class);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'person_type' => ['required', Rule::in(['F', 'J'])],

            'name' => ['required', 'string', 'max:255'],

            'trade_name' => ['nullable', 'string', 'max:255'],

            'document' => [
                'required',
                'string',
                'max:20',
                Rule::unique('clients')
                    ->where(fn ($query) => $query->where('company_id', auth()->user()->company_id)),
            ],

            'state_registration' => ['nullable', 'string', 'max:30'],

            'municipal_registration' => ['nullable', 'string', 'max:30'],

            'email' => ['nullable', 'email', 'max:255'],

            'phone' => ['nullable', 'string', 'max:20'],

            'mobile' => ['nullable', 'string', 'max:20'],

            'zip_code' => ['nullable', 'string', 'max:10'],

            'address' => ['nullable', 'string', 'max:255'],

            'number' => ['nullable', 'string', 'max:20'],

            'complement' => ['nullable', 'string', 'max:255'],

            'district' => ['nullable', 'string', 'max:255'],

            'city' => ['nullable', 'string', 'max:255'],

            'state' => ['nullable', 'string', 'size:2'],

            'credit_limit' => ['nullable', 'numeric', 'min:0'],

            'notes' => ['nullable', 'string'],

            'active' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'active' => $this->boolean('active'),
        ]);
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'person_type.required' => 'Informe o tipo de pessoa.',
            'person_type.in' => 'Tipo de pessoa inválido.',

            'name.required' => 'Informe o nome.',
            'name.max' => 'O nome não pode ultrapassar 255 caracteres.',

            'document.required' => 'Informe o CPF ou CNPJ.',
            'document.unique' => 'Já existe um cliente com este documento.',

            'email.email' => 'Informe um e-mail válido.',

            'state.size' => 'O estado deve possuir 2 caracteres.',

            'credit_limit.numeric' => 'O limite de crédito deve ser numérico.',
            'credit_limit.min' => 'O limite de crédito não pode ser negativo.',
        ];
    }
}