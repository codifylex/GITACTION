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
        Schema::create('purchase_items', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('purchase_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('product_id')
                ->constrained()
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Snapshot do Produto
            |--------------------------------------------------------------------------
            */

            $table->string('product_code',30);

            $table->string('product_name');

            $table->string('unit_symbol',10);

            $table->string('ncm',10)->nullable();

            $table->string('cfop',4)->nullable();

            $table->string('cest',10)->nullable();

            $table->string('origin',2)->nullable();

            $table->string('cst_icms',3)->nullable();

            $table->string('csosn',4)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Quantidades
            |--------------------------------------------------------------------------
            */

            $table->decimal('quantity',15,4);

            $table->decimal('received_quantity',15,4)
                ->default(0);

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('unit_cost',15,2);

            $table->decimal('discount',15,2)
                ->default(0);

            $table->decimal('freight',15,2)
                ->default(0);

            $table->decimal('insurance',15,2)
                ->default(0);

            $table->decimal('other_expenses',15,2)
                ->default(0);

            $table->decimal('ipi',15,2)
                ->default(0);

            $table->decimal('icms_st',15,2)
                ->default(0);

            $table->decimal('total',15,2);

            /*
            |--------------------------------------------------------------------------
            | Controle de Lote
            |--------------------------------------------------------------------------
            */

            $table->string('batch')->nullable();

            $table->date('expiration_date')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Observações
            |--------------------------------------------------------------------------
            */

            $table->text('notes')->nullable();

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
                'purchase_id'
            ]);

            $table->index('product_id');

            $table->index('batch');

            $table->index('expiration_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_items');
    }
};