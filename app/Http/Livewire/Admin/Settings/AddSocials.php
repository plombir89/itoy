<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\Social;
use Livewire\Component;

class AddSocials extends Component
{
    public $social = [];

    protected $rules = [
        'social.title' => 'required|min:6',
        'social.link' => 'required|url',
        'social.icon' => 'required|string'
    ];

    protected $validationAttributes = [
        'social.title' => 'Social name',
        'social.link' => 'Social link',
        'social.icon' => 'Social icon',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add(){

        $data = $this->validate();

        $social = Social::create([
            'title' => $data['social']['title'],
            'link' => $data['social']['link'],
            'icon' => $data['social']['icon'],
        ]);

        $this->reset('social');

        $this->emit('socialAdded', ['title' => __('Socials'), 'text' => $social->title. __(' saved successful')]);
    }

    public function render()
    {
        return view('livewire.admin.settings.add-socials');
    }
}
