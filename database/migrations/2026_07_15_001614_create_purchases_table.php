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
        Schema::create('purchases', function (Blueprint $table) {

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
            | Fornecedor
            |--------------------------------------------------------------------------
            */

            $table->foreignId('supplier_id')
                ->constrained()
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Usuário
            |--------------------------------------------------------------------------
            */

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Documento
            |--------------------------------------------------------------------------
            */

            $table->string('number',30);

            $table->string('invoice_number',30)->nullable();

            $table->string('invoice_series',10)->nullable();

            $table->string('invoice_key',44)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Datas
            |--------------------------------------------------------------------------
            */

            $table->date('purchase_date');

            $table->date('delivery_date')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */

            $table->enum('status',[
                'draft',
                'approved',
                'partial',
                'received',
                'cancelled'
            ])->default('draft');

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('products_total',15,2)->default(0);

            $table->decimal('discount',15,2)->default(0);

            $table->decimal('freight',15,2)->default(0);

            $table->decimal('insurance',15,2)->default(0);

            $table->decimal('other_expenses',15,2)->default(0);

            $table->decimal('ipi',15,2)->default(0);

            $table->decimal('icms_st',15,2)->default(0);

            $table->decimal('total',15,2)->default(0);

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

            $table->softDeletes();

            /*
            |--------------------------------------------------------------------------
            | Índices
            |--------------------------------------------------------------------------
            */

            $table->unique([
                'company_id',
                'number'
            ]);

            $table->index([
                'company_id',
                'supplier_id'
            ]);

            $table->index('status');

            $table->index('purchase_date');

            $table->index('invoice_number');

            $table->index('invoice_key');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};