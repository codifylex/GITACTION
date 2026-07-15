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
        Schema::create('invoice_items', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('invoice_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('product_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Snapshot do Produto
            |--------------------------------------------------------------------------
            */

            $table->string('product_code',30);

            $table->string('product_name');

            $table->string('unit_symbol',10);

            /*
            |--------------------------------------------------------------------------
            | Fiscal
            |--------------------------------------------------------------------------
            */

            $table->string('ncm',10);

            $table->string('cfop',4);

            $table->string('cest',10)->nullable();

            $table->string('origin',2)->nullable();

            $table->string('cst_icms',3)->nullable();

            $table->string('csosn',4)->nullable();

            $table->string('cst_pis',3)->nullable();

            $table->string('cst_cofins',3)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Quantidades
            |--------------------------------------------------------------------------
            */

            $table->decimal('quantity',15,4);

            $table->decimal('unit_price',15,2);

            /*
            |--------------------------------------------------------------------------
            | Totais
            |--------------------------------------------------------------------------
            */

            $table->decimal('discount',15,2)->default(0);

            $table->decimal('freight',15,2)->default(0);

            $table->decimal('insurance',15,2)->default(0);

            $table->decimal('other_expenses',15,2)->default(0);

            $table->decimal('ipi',15,2)->default(0);

            $table->decimal('icms',15,2)->default(0);

            $table->decimal('icms_st',15,2)->default(0);

            $table->decimal('pis',15,2)->default(0);

            $table->decimal('cofins',15,2)->default(0);

            $table->decimal('total',15,2);

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
                'invoice_id'
            ]);

            $table->index('product_id');

            $table->index('ncm');

            $table->index('cfop');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};