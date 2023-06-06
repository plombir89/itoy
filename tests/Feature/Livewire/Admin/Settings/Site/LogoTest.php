<?php

namespace Tests\Feature\Livewire\Admin\Settings\Site;

use App\Http\Livewire\Admin\Settings\Site\Logo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class LogoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Logo::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_change_logo()
    {
        Storage::fake('logo');

        $file = UploadedFile::fake()->image('logo.png', config('admin.logo.image_upload_width'), config('admin.logo.image_upload_height'));

        Livewire::test(Logo::class)
                    ->set('logo', $file)
                    ->call('save')
                    ->assertEmitted('logoChanged');
    }

    /** @test */
    public function cant_change_logo_with_invalid_dimension()
    {
        Storage::fake('logo');

        $file = UploadedFile::fake()->image('logo.png', 100, 200);

        Livewire::test(Logo::class)
            ->set('logo', $file)
            ->call('save')
            ->assertHasErrors(['logo' => 'dimensions']);
    }
}
