<?php

namespace App\Http\Livewire\Admin\Content\Advantages;

use Livewire\Component;

class Edit extends Component
{
    public $advantages;
    public $img;
    public $tab_active = 0;

    protected $rules = [
        'advantages.published' => 'boolean',
        'advantages.order' => 'required|integer',
        'advantages.icon' => 'required|string',
        'advantages.items.*.title' => 'required|string|max:255',
        'advantages.items.*.content' => 'string'
    ];

    protected $validationAttributes = [
        'advantages.items.*.title' => 'title',
        'advantages.items.*.content' =>'content',
        'advantages.published' => 'published',
        'advantages.order' => 'order',
        'advantages.icon' => 'icon'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules ,[],[
            'advantages.items.*.title' => __('title'),
            'advantages.items.*.content' => __('content'),
            'advantages.published' => __('published'),
            'advantages.order' => __('order'),
            'advantages.icon' => __('icon'),
        ]);

        $this->advantages->save();

        foreach ($this->advantages->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('Advantages'), 'content' => __('Advantages was updated')]);
    }


    public function render()
    {
        return view('livewire.admin.content.advantages.edit');
    }
}
