<?php

namespace Tests\Feature\Livewire\Admin\Utilities;

use App\Http\Livewire\Admin\Utilities\SlideCreate;
use App\Http\Livewire\Admin\Utilities\SlideIndex;
use App\Models\Language;
use App\Models\Role;
use App\Models\Slide;
use App\Models\SlideLinks;
use App\Models\User;
use Database\Factories\SlideFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class SlideTest extends TestCase
{
    use RefreshDatabase;

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

        Language::factory()->create([
            'id' => 2,
            'prefix' => 'ru',
            'title' => 'Русский',
            'default' => 0,
            'active' => 1,
            'icon' => '/img/flags-svg/ru.svg',
            'listorder' => 0
        ]);


        Language::factory()->create([
            'id' => 3,
            'prefix' => 'en',
            'title' => 'English',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/us.svg',
            'listorder' => 0
        ]);

    }

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(SlideIndex::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_access_page()
    {
        $role = Role::create(['name' => 'Super admin']);
        $user = User::factory()->create(['role_id' => $role->id]);

        $this->actingAs($user);

        $response = $this->get(route('admin.utilities.slider'));

        $response->assertStatus(200);
    }

    /** @test */
    public function can_add_slide()
    {
        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', 'http://asd.com')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save')
            ->assertEmitted('slideCreated');;

        $this->assertTrue(Slide::where('id', 1)->exists());
    }


    /** @test */
    public function cant_add_if_wrong_width_of_image()
    {
        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png','700', '420');

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', '')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save')
            ->assertHasErrors(['img' => 'dimensions:width']);
    }

    /** @test */
    public function order_must_be_grather_than_0()
    {
        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png','700', '420');

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 0)
            ->set('slide.published', true)
            ->set('slide.links.1.link', '')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save')
            ->assertHasErrors(['slide.order' => 'min']);
    }

    /** @test */
    public function cant_add_if_link_is_not_valid_url()
    {
        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', 'httpasd')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save')
            ->assertHasErrors(['slide.links.1.link' => 'url']);
    }

    /** @test */
    public function can_update_slide_without_image()
    {
//        Slide::factory(1)->create();
//        SlideLinks::factory(1)->create(['id' => 1, 'lang' => 1]);
//        SlideLinks::factory(1)->create(['id' => 2, 'lang' => 2]);

        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', '')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save');

        Livewire::test(\App\Http\Livewire\Admin\Utilities\Slide::class, ['slide' => Slide::with('links.language')->first()])
            ->set('slide.published' , false)
            ->call('save');

        $this->assertTrue(Slide::where(['published' => false])->exists());
    }

    /** @test */
    public function cant_update_if_link_is_invalid()
    {
//        Slide::factory(1)->create(['published' => true]);
//        SlideLinks::factory(1)->create(['id' => 1, 'lang' => 1]);
//        SlideLinks::factory(1)->create(['id' => 2, 'lang' => 2]);

        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', '')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save');

        Livewire::test(\App\Http\Livewire\Admin\Utilities\Slide::class, ['slide' => Slide::with('links.language')->first()])
            ->set('slide.published' , true)
            ->set('slide.order' , 1)
            ->set('img', null)
            ->set('slide.links.1.link' , 'wrong')
            ->call('save')->assertHasErrors(['slide.links.1.link' => 'url']);
    }

    /** @test */
    public function can_change_slide_image()
    {
//        Slide::factory(1)->create(['published' => true]);
//        SlideLinks::factory(1)->create(['id' => 1, 'lang' => 1]);
//        SlideLinks::factory(1)->create(['id' => 2, 'lang' => 2]);

        Storage::fake('slide');

        $file1 = UploadedFile::fake()->image('slide.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', '')
            ->set('slide.links.2.link', '')
            ->set('img', $file1)
            ->call('save');

        $file = UploadedFile::fake()->image('slide2.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(\App\Http\Livewire\Admin\Utilities\Slide::class, ['slide' => Slide::with('links.language')->first()])
            ->set('img', $file)
            ->call('save')->assertHasNoErrors('img');
    }

    /** @test */
    public function can_delete_slide()
    {
//        Slide::factory(1)->create(['published' => true]);
//        SlideLinks::factory(1)->create(['id' => 1, 'lang' => 1]);
//        SlideLinks::factory(1)->create(['id' => 2, 'lang' => 2]);

        Storage::fake('slide');

        $file = UploadedFile::fake()->image('slide.png',config('admin.slider.image_upload_width'), config('admin.slider.image_upload_height'));

        Livewire::test(SlideCreate::class)
            ->set('slide.order', 1)
            ->set('slide.published', true)
            ->set('slide.links.1.link', '')
            ->set('slide.links.2.link', '')
            ->set('img', $file)
            ->call('save');

        Livewire::test(\App\Http\Livewire\Admin\Utilities\SlideIndex::class)
            ->set('slideToRemove', Slide::with('links.language')->first())
            ->call('removeSlide');

        $this->assertFalse(Slide::where('id', 1)->exists());
    }
}
