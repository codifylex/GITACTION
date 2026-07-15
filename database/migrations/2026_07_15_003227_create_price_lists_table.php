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
        Schema::create('price_lists', function (Blueprint $table) {

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
            | Dados da tabela
            |--------------------------------------------------------------------------
            */

            $table->string('name',100);

            $table->string('description')->nullable();

            $table->date('start_date')->nullable();

            $table->date('end_date')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Regras
            |--------------------------------------------------------------------------
            */

            $table->decimal('markup_percentage',8,2)
                ->default(0);

            $table->decimal('discount_percentage',8,2)
                ->default(0);

            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */

            $table->boolean('active')
                ->default(true);

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
                'name'
            ]);

            $table->index([
                'company_id',
                'active'
            ]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_lists');
    }
};