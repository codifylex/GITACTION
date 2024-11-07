<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_messages_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_id')->constrained()->onDelete('cascade'); // Relacionamento com a tabela chats
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relacionamento com a tabela users (presumido)
            $table->text('content');
            $table->timestamps(); // Criação das colunas 'created_at' e 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
