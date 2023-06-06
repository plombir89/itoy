<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\Social;
use Livewire\Component;

class Socials extends Component
{
    public $socials;

    protected $listeners = ['socialAdded' => 'resetSocialsList'];

    protected $rules = [
        'socials.*.title' => 'required|min:6',
        'socials.*.link' => 'required_if:socials.*.published,true|url',
        'socials.*.icon' => 'required|string',
        'socials.*.published' => 'boolean'
    ];

    protected $validationAttributes = [
        'socials.*.link' => 'Social link',
        'socials.*.published' => 'Social published',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $this->resetSocialsList();
    }

    public function save(){
        $this->validate();

        foreach ($this->socials as $social) {
            $social->save();
        }

        $this->emit('socialsSaved', ['title' => __('Socials'), 'text' => __('Socials saved successful')]);
    }

    public function remove($index)
    {
        $social = $this->socials[$index];
        $this->socials->forget($index);

        $social->delete();

        $this->emit('socialDeleted', ['title' => __('Socials'), 'text' => __('Social deleted')]);
    }

    public function resetSocialsList(){
        $this->socials = Social::all();
    }

    public function render()
    {
        return view('livewire.admin.settings.socials');
    }
}
