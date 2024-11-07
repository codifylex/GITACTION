<?php

namespace Tests\Feature\Livewire\Chat;

use App\Livewire\Chat\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Service::class)
            ->assertStatus(200);
    }
}
