<?php

namespace Tests\Feature\Livewire\Chat;

use App\Livewire\Chat\Box;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class BoxTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Box::class)
            ->assertStatus(200);
    }
}
