<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_images', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relacionamentos
            |--------------------------------------------------------------------------
            */

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('product_id')
                ->constrained()
                ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Arquivo
            |--------------------------------------------------------------------------
            */

            $table->string('file_name');

            $table->string('file_path');

            $table->string('mime_type')->nullable();

            $table->integer('file_size')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Configuração
            |--------------------------------------------------------------------------
            */

            $table->boolean('is_main')
                ->default(false);

            $table->integer('sort_order')
                ->default(1);

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
                'product_id'
            ]);

            $table->index('is_main');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};