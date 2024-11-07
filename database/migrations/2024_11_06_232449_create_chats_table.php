<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_chats_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Isso cria as colunas 'created_at' e 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
