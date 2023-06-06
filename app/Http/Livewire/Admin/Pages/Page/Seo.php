<?php

namespace App\Http\Livewire\Admin\Pages\Page;

use Livewire\Component;

class Seo extends Component
{
    public $page;

    protected $rules = [
        'page.items.*.description' => 'nullable|string|max:255',
        'page.items.*.keywords' => 'nullable|string|max:255',
    ];

    protected $validationAttributes = [
        'page.items.*.description' => 'description',
        'page.items.*.keywords' =>'keywords',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'page.items.*.description' => __('description'),
            'page.items.*.keywords' => __('keywords'),
        ]);

        foreach ($this->page->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Page'), 'text' => __('Page seo was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.pages.page.seo');
    }
}
