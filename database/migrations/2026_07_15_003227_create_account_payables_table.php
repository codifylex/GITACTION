<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('account_payables', function (Blueprint $table) {

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
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('supplier_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('payment_method_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Documento
            |--------------------------------------------------------------------------
            */

            $table->string('document_number',30);

            $table->integer('installment')->default(1);

            /*
            |--------------------------------------------------------------------------
            | Datas
            |--------------------------------------------------------------------------
            */

            $table->date('issue_date');

            $table->date('due_date');

            $table->date('payment_date')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('original_amount',15,2);

            $table->decimal('interest',15,2)->default(0);

            $table->decimal('fine',15,2)->default(0);

            $table->decimal('discount',15,2)->default(0);

            $table->decimal('paid_amount',15,2)->default(0);

            $table->decimal('balance',15,2);

            /*
            |--------------------------------------------------------------------------
            | Situação
            |--------------------------------------------------------------------------
            */

            $table->enum('status',[
                'pending',
                'partial',
                'paid',
                'overdue',
                'cancelled'
            ])->default('pending');

            /*
            |--------------------------------------------------------------------------
            | Observações
            |--------------------------------------------------------------------------
            */

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->softDeletes();

            $table->index(['company_id','supplier_id']);

            $table->index('purchase_id');

            $table->index('due_date');

            $table->index('status');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts_payable');
    }
};