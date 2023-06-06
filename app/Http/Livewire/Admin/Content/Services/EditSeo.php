<?php

namespace App\Http\Livewire\Admin\Content\Services;

use Livewire\Component;

class EditSeo extends Component
{
    public $services;

    protected $rules = [
        'services.items.*.description' => 'nullable|string|max:255',
        'services.items.*.keywords' => 'nullable|string|max:255',
    ];

    protected $validationAttributes = [
        'services.items.*.description' => 'description',
        'services.items.*.keywords' =>'keywords',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'services.items.*.description' => __('description'),
            'services.items.*.keywords' => __('keywords'),
        ]);

        foreach ($this->services->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Services'), 'text' => __('Services seo was updated')]);
    }
    public function render()
    {
        return view('livewire.admin.content.services.edit-seo');
    }
}
