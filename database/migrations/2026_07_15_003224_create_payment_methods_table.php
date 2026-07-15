<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_methods', function (Blueprint $table) {

            $table->id();

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name',100);

            $table->string('code',30);

            $table->enum('type',[
                'cash',
                'pix',
                'credit_card',
                'debit_card',
                'bank_slip',
                'bank_transfer',
                'check',
                'voucher',
                'other'
            ]);

            $table->integer('installments')->default(1);

            $table->boolean('generates_receivable')->default(true);

            $table->boolean('generates_cash')->default(true);

            $table->boolean('active')->default(true);

            $table->timestamps();

            $table->softDeletes();

            $table->unique([
                'company_id',
                'code'
            ]);

            $table->index([
                'company_id',
                'name'
            ]);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};