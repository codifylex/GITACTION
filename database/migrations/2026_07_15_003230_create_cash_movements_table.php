<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cash_movements', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('cash_register_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('payment_method_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Origem
            |--------------------------------------------------------------------------
            */

            $table->foreignId('sale_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('purchase_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('account_receivable_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('account_payable_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Movimento
            |--------------------------------------------------------------------------
            */

            $table->enum('type',[
                'entry',
                'exit'
            ]);

            $table->enum('origin',[
                'sale',
                'purchase',
                'receivable',
                'payable',
                'opening',
                'closing',
                'adjustment',
                'withdrawal',
                'deposit',
                'other'
            ]);

            $table->dateTime('movement_date');

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('amount',15,2);

            /*
            |--------------------------------------------------------------------------
            | Histórico
            |--------------------------------------------------------------------------
            */

            $table->string('description');

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
                'cash_register_id'
            ]);

            $table->index('movement_date');

            $table->index('type');

            $table->index('origin');

            $table->index('sale_id');

            $table->index('purchase_id');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_movements');
    }
};