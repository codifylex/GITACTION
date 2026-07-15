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
        Schema::create('suppliers', function (Blueprint $table) {

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
            | Tipo de Pessoa
            |--------------------------------------------------------------------------
            */

            $table->enum('person_type', [
                'F',
                'J'
            ])->default('J');

            /*
            |--------------------------------------------------------------------------
            | Identificação
            |--------------------------------------------------------------------------
            */

            $table->string('name',255);

            $table->string('trade_name')->nullable();

            $table->string('document',20);

            $table->string('state_registration',30)->nullable();

            $table->string('municipal_registration',30)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Contato
            |--------------------------------------------------------------------------
            */

            $table->string('contact_name')->nullable();

            $table->string('email')->nullable();

            $table->string('phone',20)->nullable();

            $table->string('mobile',20)->nullable();

            $table->string('website')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Endereço
            |--------------------------------------------------------------------------
            */

            $table->string('zip_code',10)->nullable();

            $table->string('address')->nullable();

            $table->string('number',20)->nullable();

            $table->string('complement')->nullable();

            $table->string('district')->nullable();

            $table->string('city')->nullable();

            $table->string('state',2)->nullable();

            /*
            |--------------------------------------------------------------------------
            | Financeiro
            |--------------------------------------------------------------------------
            */

            $table->integer('payment_term')
                ->default(30);

            $table->string('pix_key')->nullable();

            $table->string('bank')->nullable();

            $table->string('agency')->nullable();

            $table->string('account')->nullable();

            $table->string('account_type')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Observações
            |--------------------------------------------------------------------------
            */

            $table->text('notes')->nullable();

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
                'document'
            ]);

            $table->index([
                'company_id',
                'name'
            ]);

            $table->index('email');

            $table->index('phone');

            $table->index('active');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};