<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_chat_user_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatUserTable extends Migration
{
    public function up()
    {
        Schema::create('chat_user', function (Blueprint $table) {
            $table->foreignId('chat_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps(); // Criação das colunas 'created_at' e 'updated_at'

            // Chave composta para garantir que cada par (chat_id, user_id) seja único
            $table->primary(['chat_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_user');
    }
}
