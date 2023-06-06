<?php

namespace Tests\Feature;

use App\Events\LanguageChanged;
use App\Http\Livewire\Admin\Settings\Languages;
use App\Models\Language;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutEvents;
use Livewire\Livewire;
use Symfony\Contracts\EventDispatcher\Event;
use Tests\TestCase;

class LanguagesTest extends TestCase
{
    use RefreshDatabase,WithoutEvents;

    protected function setUp(): void
    {
        parent::setUp();

        Language::firstOrCreate([
            'prefix' => 'ro'
        ], [
            'title' => 'Romana',
            'default' => 1,
            'active' => 1,
            'icon' => '/img/flags-svg/ro.svg',
            'listorder' => 1
        ]);

        Language::firstOrCreate([
            'prefix' => 'ru'
        ], [
            'title' => 'Русский',
            'default' => 0,
            'active' => 1,
            'icon' => '/img/flags-svg/ru.svg',
            'listorder' => 0
        ]);

        Language::firstOrCreate([
            'prefix' => 'en'
        ], [
            'title' => 'English',
            'default' => 0,
            'active' => 0,
            'icon' => '/img/flags-svg/us.svg',
            'listorder' => 0
        ]);
    }

    public function test_langs_exists_in_database()
    {
        $this->assertDatabaseCount('languages',3);
    }

    public function test_cant_add_inexistent_language()
    {
        Livewire::test(Languages::class)
            ->set('addlang', 'it')
            ->call('add');

        $this->assertFalse(false);
    }

    public function test_can_not_add_not_selected_language()
    {
        Livewire::test(Languages::class)
            ->set('addlang', '')
            ->call('add');

        $this->assertFalse(false);
    }

    public function test_can_add_language()
    {
        Livewire::test(Languages::class)
            ->set('addlang', 'en')
            ->call('add');

        $this->assertTrue(Language::where(['prefix' => 'en', 'active' => '-1'])->exists());

    }

    public function test_can_remove_language()
    {
        Livewire::test(Languages::class)
            ->set('langToRemove', 'ru')
            ->call('remove');

        $this->assertTrue(Language::where(['prefix' => 'ru', 'active' => 0])->exists());
    }

    public function test_cant_remove_inexistent_language()
    {
        Livewire::test(Languages::class)
            ->set('langToRemove', 'it')
            ->call('remove');

        $this->assertFalse(false);
    }

}
