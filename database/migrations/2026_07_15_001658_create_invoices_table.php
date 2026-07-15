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
        Schema::create('invoices', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('sale_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('client_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Documento Fiscal
            |--------------------------------------------------------------------------
            */

            $table->enum('model', [
                '55',
                '65'
            ]);

            $table->integer('number');

            $table->integer('series')->default(1);

            $table->string('access_key',44)->nullable();

            $table->string('protocol',50)->nullable();

            $table->string('receipt',50)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Situação
            |--------------------------------------------------------------------------
            */

            $table->enum('status',[
                'draft',
                'processing',
                'authorized',
                'denied',
                'rejected',
                'cancelled'
            ])->default('draft');

            /*
            |--------------------------------------------------------------------------
            | Datas
            |--------------------------------------------------------------------------
            */

            $table->dateTime('issued_at')->nullable();

            $table->dateTime('authorized_at')->nullable();

            $table->dateTime('cancelled_at')->nullable();

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

            $table->decimal('icms',15,2)->default(0);

            $table->decimal('icms_st',15,2)->default(0);

            $table->decimal('pis',15,2)->default(0);

            $table->decimal('cofins',15,2)->default(0);

            $table->decimal('total',15,2)->default(0);

            /*
            |--------------------------------------------------------------------------
            | XML
            |--------------------------------------------------------------------------
            */

            $table->longText('xml')->nullable();

            $table->longText('xml_cancel')->nullable();

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
                'model',
                'series',
                'number'
            ]);

            $table->unique('access_key');

            $table->index('status');

            $table->index('issued_at');

            $table->index('sale_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};