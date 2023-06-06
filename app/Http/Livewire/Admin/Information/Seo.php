<?php

namespace App\Http\Livewire\Admin\Information;

use Livewire\Component;

class Seo extends Component
{
    public $scripts;

    protected $rules = [
        'scripts.head_scripts' => 'string',
        'scripts.footer_scripts' => 'string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules ,[],[
            'scripts.head_scripts' => __('head scripts'),
            'scripts.footer_scripts' => __('footer scripts'),
        ]);

        $this->scripts->save();

        $this->emit('updated', ['title' => __('Seo'), 'text' => __('Seo was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.information.seo');
    }
}
