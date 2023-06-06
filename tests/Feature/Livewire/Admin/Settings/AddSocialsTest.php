<?php

namespace Tests\Feature\Livewire\Admin\Settings;

use App\Http\Livewire\Admin\Settings\AddSocials;
use App\Models\Social;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AddSocialsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(AddSocials::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_add_socials()
    {
        Livewire::test(AddSocials::class)
            ->set('social.title', 'foobar')
            ->set('social.link', 'https://foo.com')
            ->set('social.icon', 'foo')
            ->call('add');

        $this->assertTrue(Social::whereTitle('foobar')->exists());
    }

    /** @test  */
    function title_link_icon_is_required()
    {
       Livewire::test(AddSocials::class)
            ->set('social.title', '')
            ->set('social.link', '')
            ->set('social.icon', '')
            ->call('add')
            ->assertHasErrors(['social.title' => 'required','social.link' => 'required','social.icon' => 'required']);
    }
}
