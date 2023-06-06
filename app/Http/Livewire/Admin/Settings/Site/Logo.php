<?php

namespace App\Http\Livewire\Admin\Settings\Site;

use Livewire\Component;
use Livewire\WithFileUploads;

class Logo extends Component
{
    use WithFileUploads;

    public $logo;
    public $disabled = false;

    public function hydrate()
    {
        $this->resetErrorBag();
    }

    public function save()
    {
        $this->validate([
            'logo' => 'image|mimes:png|dimensions:max_width='.config('admin.logo.image_upload_width').',max_height='.config('admin.logo.image_upload_height'),
        ]);

        $this->disabled = true;

        $extension = $this->logo->getClientOriginalExtension();

        $this->logo->storeAs('logo', 'logo.'.$extension);

        $this->emit('logoChanged', ['title' => __('Logo'), 'text' => __('Logo saved successful')]);

        $this->logo = null;
        $this->disabled = false;
    }

    public function render()
    {
        return view('livewire.admin.settings.site.logo');
    }
}
