<?php

namespace Tests\Feature\Livewire\Admin\Settings;

use App\Http\Livewire\Admin\Settings\Menu\Index;
use App\Models\Language;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class MenuTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        Language::factory()->create([
            'id' => 1,
            'prefix' => 'ro',
            'title' => 'Romana',
            'default' => 1,
            'active' => 1,
            'icon' => '/img/flags-svg/ro.svg',
            'listorder' => 1
        ]);

        Role::create(['name' => 'Super admin']);
        Role::create(['name' => 'Admin']);

        $role = Role::create(['name' => 'Super admin']);
        $this->user = User::factory()->create(['role_id' => $role->id]);

    }

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Index::class);

        $component->assertStatus(200);
    }

    public function test_can_add_menu()
    {
        $this->actingAs($this->user);

        $response = $this->post(route('admin.settings.menu.store'), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => 'Menu title',
                    'link' => 'http://link.com'
                ]
            ]
        ]);


        $response->assertRedirect(route('admin.settings.menu.index'));
    }

    public function test_link_is_required()
    {
        $this->actingAs($this->user);

        $response = $this->post(route('admin.settings.menu.store'), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => 'Menu title',
                    'link' => ''
                ]
            ]
        ]);

        $response->assertSessionHasErrors('menu.1.link');
    }

    public function test_title_is_required()
    {
        $this->actingAs($this->user);

        $response = $this->post(route('admin.settings.menu.store'), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => '',
                    'link' => '/link'
                ]
            ]
        ]);

        $response->assertSessionHasErrors('menu.1.title');
    }

    public function test_can_update_menu()
    {
        $this->actingAs($this->user);

        $this->post(route('admin.settings.menu.store'), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => 'Menu title',
                    'link' => 'http://link.com'
                ]
            ]
        ]);

        $menu = Menu::first();

        $this->patch(route('admin.settings.menu.update', $menu->id), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => 'Menu title updated',
                    'link' => 'http://link.com'
                ]
            ]
        ]);

        $this->assertTrue(MenuItem::where(['menu_id' => $menu->id, 'title' => 'Menu title updated'])->exists());

    }

    public function test_cant_update_menu_if_title_or_link_are_null()
    {
        $this->actingAs($this->user);

        $this->post(route('admin.settings.menu.store'), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => 'Menu title',
                    'link' => 'http://link.com'
                ]
            ]
        ]);

        $menu = Menu::first();

        $response = $this->patch(route('admin.settings.menu.update', $menu->id), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => '',
                    'link' => ''
                ]
            ]
        ]);

        $response->assertSessionHasErrors(['menu.1.title','menu.1.link']);

    }

    /** @test */
    public function can_delete_menu()
    {
        $this->actingAs($this->user);

        $this->post(route('admin.settings.menu.store'), [
            'published' => true,
            'menu' => [
                1 => [
                    'title' => 'Menu title',
                    'link' => 'http://link.com'
                ]
            ]
        ]);

        $menu = Menu::first();

        Livewire::test(Index::class)
            ->set('menuToRemove', $menu)
            ->call('remove');

        $this->assertDatabaseCount('menu', 0);
    }
}
