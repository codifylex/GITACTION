<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchase_payments', function (Blueprint $table) {

            $table->id();

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('purchase_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('payment_method_id')
                ->constrained()
                ->restrictOnDelete();

            $table->integer('installment')->default(1);

            $table->date('due_date');

            $table->date('payment_date')->nullable();

            $table->decimal('amount',15,2);

            $table->decimal('interest',15,2)->default(0);

            $table->decimal('fine',15,2)->default(0);

            $table->decimal('discount',15,2)->default(0);

            $table->decimal('paid_amount',15,2)->default(0);

            $table->enum('status',[
                'pending',
                'partial',
                'paid',
                'cancelled'
            ])->default('pending');

            $table->string('transaction_number')->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index([
                'company_id',
                'purchase_id'
            ]);

            $table->index('payment_method_id');

            $table->index('status');

            $table->index('due_date');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_payments');
    }
};