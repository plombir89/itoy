<?php

namespace App\Http\Livewire\Admin\Settings\Site;

use Livewire\Component;

class Copyright extends Component
{
    public $text;

    public function mount(){
        $this->text = \App\Models\Copyright::findOr(1, function () {
            return \App\Models\Copyright::create(['id' => 1, 'text' => '']);
        });
    }

    protected $rules = [
        'text.text' => 'max:255'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        $this->text->save();

        $this->emit('copyrightSaved', ['title' => __('Copyright'), 'text' => __('Data saved successful')]);
    }

    public function render()
    {
        return view('livewire.admin.settings.site.copyright');
    }
}
