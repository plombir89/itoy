<?php

namespace Tests\Feature\Livewire\Admin\Settings\Site;

use App\Http\Livewire\Admin\Settings\Site\Copyright;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CopyrightTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Copyright::class);

        $component->assertStatus(200);
    }
}
