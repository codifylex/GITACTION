<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_transfers', function (Blueprint $table) {

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
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Depósitos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('source_warehouse_id')
                ->constrained('warehouses')
                ->restrictOnDelete();

            $table->foreignId('destination_warehouse_id')
                ->constrained('warehouses')
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Usuário
            |--------------------------------------------------------------------------
            */

            $table->foreignId('user_id')
                ->constrained()
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Dados da transferência
            |--------------------------------------------------------------------------
            */

            $table->decimal('quantity',15,4);

            $table->dateTime('transfer_date');

            /*
            |--------------------------------------------------------------------------
            | Situação
            |--------------------------------------------------------------------------
            */

            $table->enum('status',[
                'pending',
                'in_transit',
                'completed',
                'cancelled'
            ])->default('pending');

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
                'product_id'
            ]);

            $table->index('transfer_date');

            $table->index('status');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_transfers');
    }
};