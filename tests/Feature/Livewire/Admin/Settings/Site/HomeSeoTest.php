<?php

namespace Tests\Feature\Livewire\Admin\Settings\Site;

use App\Http\Livewire\Admin\Settings\Site\HomeSeo;
use App\Models\HomePageSeo;
use App\Models\Language;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class HomeSeoTest extends TestCase
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

        $data = HomePageSeo::create();

        $langs = Language::getAdminLangs();

        foreach ($langs as $lang){
            $data->info()->create([
                'title' => 'This is the title - '.$lang->title,
                'description' => 'This is the description - '.$lang->title,
                'keywords' => 'This is the keywords - '.$lang->title,
                'lang' => $lang->id
            ]);
        }
    }

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(HomeSeo::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function can_update()
    {
        Livewire::test(HomeSeo::class)
            ->set('data.info.1.title', 'new title')
            ->set('data.info.1.description', 'new description')
            ->set('data.info.1.keywords', 'new,keywords')
            ->call('save')->assertEmitted('seoSaved');
    }

}
