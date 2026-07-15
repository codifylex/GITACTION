<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determina se o usuário pode fazer esta requisição.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Regras de validação.
     */
    public function rules(): array
    {
        $category = $this->route('category');

        return [
            'name' => [
                'required',
                'string',
                'max:150',
                Rule::unique('categories')
                    ->where(function ($query) {
                        return $query->where(
                            'company_id',
                            auth()->user()->company_id
                        );
                    })
                    ->ignore($category->id),
            ],

            'description' => [
                'nullable',
                'string',
                'max:500',
            ],

            'active' => [
                'nullable',
                'boolean',
            ],
        ];
    }

    /**
     * Preparação dos dados.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'active' => $this->boolean('active'),
        ]);
    }

    /**
     * Mensagens personalizadas.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Informe o nome da categoria.',
            'name.unique' => 'Já existe uma categoria com esse nome.',
            'name.max' => 'O nome deve possuir no máximo 150 caracteres.',

            'description.max' => 'A descrição deve possuir no máximo 500 caracteres.',

            'active.boolean' => 'Valor inválido para o campo status.',
        ];
    }

    /**
     * Nomes amigáveis.
     */
    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'description' => 'descrição',
            'active' => 'status',
        ];
    }
}