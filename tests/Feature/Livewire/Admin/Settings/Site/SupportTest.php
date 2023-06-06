<?php

namespace Tests\Feature\Livewire\Admin\Settings\Site;

use App\Http\Livewire\Admin\Settings\Site\Support;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class SupportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Support::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_update_with_correct_data()
    {
        Livewire::test(Support::class)
            ->set('site_name', 'New name')
            ->set('status', true)
            ->set('start_date', now())
            ->call('save')
            ->assertEmitted('supportSaved');

    }

    /** @test */
    public function can_change_favicon_ico()
    {
        Storage::fake('favicon');

        $file = UploadedFile::fake()->image('favicon.ico', config('admin.favicon.image_upload_width'), config('admin.favicon.image_upload_height'));

        Livewire::test(Support::class)
            ->set('favicon', $file)
            ->call('save')
            ->assertEmitted('supportSaved');

    }

    /** @test */
    public function can_change_favicon_png()
    {
        Storage::fake('favicon');

        $file = UploadedFile::fake()->image('favicon.png', config('admin.favicon.image_upload_width'), config('admin.favicon.image_upload_height'));

        Livewire::test(Support::class)
            ->set('favicon', $file)
            ->call('save')
            ->assertEmitted('supportSaved');

    }

    /** @test */
    public function cant_change_favicon_to_jpg()
    {
        Storage::fake('favicon');

        $file = UploadedFile::fake()->image('favicon.jpg', config('admin.favicon.image_upload_width'), config('admin.favicon.image_upload_height'));

        Livewire::test(Support::class)
            ->set('favicon', $file)
            ->call('save')
            ->assertHasErrors('favicon');
    }
}
