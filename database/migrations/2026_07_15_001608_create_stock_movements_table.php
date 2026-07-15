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
        Schema::create('stock_movements', function (Blueprint $table) {

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
            | Produto
            |--------------------------------------------------------------------------
            */

            $table->foreignId('product_id')
                ->constrained()
                ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Estoque
            |--------------------------------------------------------------------------
            */

            $table->foreignId('stock_id')
                ->constrained()
                ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Tipo da movimentação
            |--------------------------------------------------------------------------
            */

            $table->enum('movement_type',[
                'purchase',
                'sale',
                'return_purchase',
                'return_sale',
                'inventory',
                'adjustment',
                'loss',
                'transfer',
                'production',
                'consumption'
            ]);

            /*
            |--------------------------------------------------------------------------
            | Operação
            |--------------------------------------------------------------------------
            */

            $table->enum('operation',[
                'entry',
                'exit'
            ]);

            /*
            |--------------------------------------------------------------------------
            | Quantidades
            |--------------------------------------------------------------------------
            */

            $table->decimal('quantity',15,4);

            $table->decimal('stock_before',15,4);

            $table->decimal('stock_after',15,4);

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('unit_cost',15,2)->default(0);

            $table->decimal('total_cost',15,2)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Documento de origem
            |--------------------------------------------------------------------------
            */

            $table->string('reference_type',50)->nullable();

            $table->unsignedBigInteger('reference_id')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Observações
            |--------------------------------------------------------------------------
            */

            $table->text('observation')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Usuário responsável
            |--------------------------------------------------------------------------
            */

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Auditoria
            |--------------------------------------------------------------------------
            */

            $table->timestamps();

            /*
            |--------------------------------------------------------------------------
            | Índices
            |--------------------------------------------------------------------------
            */

            $table->index([
                'company_id',
                'product_id'
            ]);

            $table->index([
                'reference_type',
                'reference_id'
            ]);

            $table->index('movement_type');

            $table->index('operation');

            $table->index('created_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};