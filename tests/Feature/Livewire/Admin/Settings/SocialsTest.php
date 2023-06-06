<?php

namespace Tests\Feature\Livewire\Admin\Settings;

use App\Http\Livewire\Admin\Settings\AddSocials;
use App\Http\Livewire\Admin\Settings\Socials;
use App\Models\Social;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SocialsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Livewire::test(AddSocials::class)
            ->set('social.title', 'foobar')
            ->set('social.link', 'https://foo.com')
            ->set('social.icon', 'foo')
            ->call('add');
    }

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Socials::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function social_are_saved()
    {
        Livewire::test(Socials::class)
            ->set('socials.0.link','http://newadmin.md/')
            ->set('socials.0.published',true)
            ->call('save');

        $this->assertTrue(Social::whereLink('http://newadmin.md/')->exists());
    }

    /** @test */
    public function social_are_not_saved_if_published_is_true_and_link_is_empty()
    {
        Livewire::test(Socials::class)
            ->set('socials.0.link','')
            ->set('socials.0.published',true)
            ->call('save')
            ->assertHasErrors(['socials.0.link' => 'required_if']);
    }

    /** @test */
    public function social_are_saved_if_published_is_false_and_link_is_empty()
    {
        Livewire::test(Socials::class)
            ->set('socials.0.link','')
            ->set('socials.0.published',false)
            ->call('save')
            ->assertEmitted('socialsSaved');
    }

    /** @test */
    public function social_can_be_deleted()
    {
        Livewire::test(Socials::class)
            ->call('remove', 0)
            ->assertEmitted('socialDeleted');
    }
}
