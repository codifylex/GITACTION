<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cash_registers', function (Blueprint $table) {

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
            | Usuário responsável
            |--------------------------------------------------------------------------
            */

            $table->foreignId('user_id')
                ->constrained()
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Identificação
            |--------------------------------------------------------------------------
            */

            $table->string('name',100);

            $table->string('description')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Datas
            |--------------------------------------------------------------------------
            */

            $table->dateTime('opened_at');

            $table->dateTime('closed_at')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Valores
            |--------------------------------------------------------------------------
            */

            $table->decimal('opening_balance',15,2)->default(0);

            $table->decimal('closing_balance',15,2)->default(0);

            $table->decimal('expected_balance',15,2)->default(0);

            $table->decimal('difference',15,2)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Situação
            |--------------------------------------------------------------------------
            */

            $table->enum('status',[
                'open',
                'closed'
            ])->default('open');

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

            $table->index([
                'company_id',
                'status'
            ]);

            $table->index('opened_at');

            $table->index('closed_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_registers');
    }
};