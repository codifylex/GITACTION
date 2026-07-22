<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            'category_id' => [
                'required',
                'exists:categories,id',
            ],

            'brand_id' => [
                'nullable',
                'exists:brands,id',
            ],

            'unit_id' => [
                'required',
                'exists:units,id',
            ],

            /*
            |--------------------------------------------------------------------------
            | Identificação
            |--------------------------------------------------------------------------
            */

            'code' => [
                'nullable',
                'string',
                'max:30',
            ],

            'sku' => [
                'nullable',
                'string',
                'max:50',
            ],

            'barcode' => [
                'nullable',
                'string',
                'max:50',
            ],

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'type' => [
                'required',
                'in:product,service',
            ],

            /*
            |--------------------------------------------------------------------------
            | Fiscal
            |--------------------------------------------------------------------------
            */

            'ncm' => [
                'nullable',
                'string',
                'max:10',
            ],

            'cest' => [
                'nullable',
                'string',
                'max:10',
            ],

            'cfop' => [
                'nullable',
                'string',
                'max:4',
            ],

            'origin' => [
                'nullable',
                'string',
                'max:2',
            ],

            'cst_icms' => [
                'nullable',
                'string',
                'max:3',
            ],

            'csosn' => [
                'nullable',
                'string',
                'max:4',
            ],

            /*
            |--------------------------------------------------------------------------
            | Estoque
            |--------------------------------------------------------------------------
            */

            'stock_control' => [
                'boolean',
            ],

            'allow_negative_stock' => [
                'boolean',
            ],

            'minimum_stock' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'maximum_stock' => [
                'nullable',
                'numeric',
                'gte:minimum_stock',
            ],

            'location' => [
                'nullable',
                'string',
                'max:100',
            ],

            /*
            |--------------------------------------------------------------------------
            | Lote / Validade
            |--------------------------------------------------------------------------
            */

            'batch_control' => [
                'boolean',
            ],

            'expiration_control' => [
                'boolean',
            ],

            /*
            |--------------------------------------------------------------------------
            | Peso
            |--------------------------------------------------------------------------
            */

            'gross_weight' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'net_weight' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            /*
            |--------------------------------------------------------------------------
            | Dimensões
            |--------------------------------------------------------------------------
            */

            'height' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'width' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'length' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            'cost_price' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'sale_price' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'promotional_price' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'profit_margin' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            /*
            |--------------------------------------------------------------------------
            | Situação
            |--------------------------------------------------------------------------
            */

            'featured' => [
                'boolean',
            ],

            'active' => [
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
            'category_id' => 'categoria',
            'brand_id' => 'marca',
            'unit_id' => 'unidade',

            'code' => 'código',
            'sku' => 'SKU',
            'barcode' => 'código de barras',

            'name' => 'nome',
            'description' => 'descrição',
            'type' => 'tipo',

            'ncm' => 'NCM',
            'cest' => 'CEST',
            'cfop' => 'CFOP',
            'origin' => 'origem',
            'cst_icms' => 'CST ICMS',
            'csosn' => 'CSOSN',

            'stock_control' => 'controle de estoque',
            'allow_negative_stock' => 'permitir estoque negativo',
            'minimum_stock' => 'estoque mínimo',
            'maximum_stock' => 'estoque máximo',
            'location' => 'localização',

            'batch_control' => 'controle por lote',
            'expiration_control' => 'controle de validade',

            'gross_weight' => 'peso bruto',
            'net_weight' => 'peso líquido',

            'height' => 'altura',
            'width' => 'largura',
            'length' => 'comprimento',

            'cost_price' => 'preço de custo',
            'sale_price' => 'preço de venda',
            'promotional_price' => 'preço promocional',
            'profit_margin' => 'margem de lucro',

            'featured' => 'produto em destaque',
            'active' => 'ativo',
        ];
    }
}
