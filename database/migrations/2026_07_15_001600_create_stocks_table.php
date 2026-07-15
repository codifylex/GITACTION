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
        Schema::create('stocks', function (Blueprint $table) {

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
            | Quantidades
            |--------------------------------------------------------------------------
            */

            $table->decimal('quantity',15,4)->default(0);

            $table->decimal('reserved_quantity',15,4)->default(0);

            $table->decimal('available_quantity',15,4)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Última movimentação
            |--------------------------------------------------------------------------
            */

            $table->timestamp('last_movement_at')->nullable();

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

            $table->unique([
                'company_id',
                'product_id'
            ]);

            $table->index('product_id');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};