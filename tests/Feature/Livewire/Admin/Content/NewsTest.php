<?php

namespace Tests\Feature\Livewire\Admin\Content;

use App\Http\Livewire\Admin\Content\News\Index;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_add_news()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_update_news()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_delete_news()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_change_news_image()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_update_news_seo()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }
}
