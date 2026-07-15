<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Empresa
            |--------------------------------------------------------------------------
            */

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('category_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('brand_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('unit_id')
                ->constrained()
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Identificação
            |--------------------------------------------------------------------------
            */

            $table->string('code',30);
            $table->string('sku',50)->nullable();
            $table->string('barcode',50)->nullable();

            $table->string('name',255);
            $table->string('slug',255);

            $table->text('description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Tipo
            |--------------------------------------------------------------------------
            */

            $table->enum('type',[
                'product',
                'service'
            ])->default('product');

            /*
            |--------------------------------------------------------------------------
            | Fiscal
            |--------------------------------------------------------------------------
            */

            $table->string('ncm',10)->nullable();
            $table->string('cest',10)->nullable();

            $table->string('cfop',4)->nullable();

            $table->string('origin',2)->nullable();

            $table->string('cst_icms',3)->nullable();

            $table->string('csosn',4)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Estoque
            |--------------------------------------------------------------------------
            */

            $table->boolean('stock_control')->default(true);

            $table->boolean('allow_negative_stock')->default(false);

            $table->decimal('minimum_stock',15,4)->default(0);

            $table->decimal('maximum_stock',15,4)->default(0);

            $table->string('location')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Lote / Validade
            |--------------------------------------------------------------------------
            */

            $table->boolean('batch_control')->default(false);

            $table->boolean('expiration_control')->default(false);

            /*
            |--------------------------------------------------------------------------
            | Peso
            |--------------------------------------------------------------------------
            */

            $table->decimal('gross_weight',10,3)->default(0);

            $table->decimal('net_weight',10,3)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Dimensões
            |--------------------------------------------------------------------------
            */

            $table->decimal('height',10,2)->default(0);

            $table->decimal('width',10,2)->default(0);

            $table->decimal('length',10,2)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('cost_price',15,2)->default(0);

            $table->decimal('sale_price',15,2)->default(0);

            $table->decimal('promotional_price',15,2)->nullable();

            $table->decimal('profit_margin',8,2)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Situação
            |--------------------------------------------------------------------------
            */

            $table->boolean('featured')->default(false);

            $table->boolean('active')->default(true);

            /*
            |--------------------------------------------------------------------------
            | Auditoria
            |--------------------------------------------------------------------------
            */

            $table->timestamps();

            $table->softDeletes();

            /*
            |--------------------------------------------------------------------------
            | Índices
            |--------------------------------------------------------------------------
            */

            $table->unique([
                'company_id',
                'code'
            ]);

            $table->unique([
                'company_id',
                'slug'
            ]);

            $table->index([
                'company_id',
                'name'
            ]);

            $table->index('barcode');

            $table->index('sku');

            $table->index('active');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};