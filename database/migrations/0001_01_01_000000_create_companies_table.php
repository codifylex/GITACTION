<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {

            $table->id();

            $table->string('corporate_name', 255);
            $table->string('trade_name', 255);

            $table->string('document', 18)->unique();

            $table->string('state_registration', 30)->nullable();
            $table->string('municipal_registration', 30)->nullable();

            $table->string('email')->nullable();
            $table->string('phone',20)->nullable();

            $table->string('zip_code',10)->nullable();
            $table->string('address')->nullable();
            $table->string('number',20)->nullable();
            $table->string('complement')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('state',2)->nullable();

            $table->enum('tax_regime',[
                'simples',
                'presumido',
                'real'
            ])->default('simples');

            $table->boolean('active')->default(true);

            $table->timestamps();

            $table->softDeletes();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};