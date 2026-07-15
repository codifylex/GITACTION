<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warehouses', function (Blueprint $table) {

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
            | Identificação
            |--------------------------------------------------------------------------
            */

            $table->string('name',100);

            $table->string('code',20);

            $table->string('description')->nullable();

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
                'code'
            ]);

            $table->index([
                'company_id',
                'active'
            ]);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};