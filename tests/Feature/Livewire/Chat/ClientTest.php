<?php

namespace Tests\Feature\Livewire\Chat;

use App\Livewire\Chat\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Client::class)
            ->assertStatus(200);
    }
}
