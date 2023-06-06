<?php

namespace App\Http\Livewire\Admin\Pages\Page;

use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
    public $page;
    public $tab_active = 0;
    public $use_footer_columns;
    public $footer_columns_count;

    public function mount()
    {
        $this->use_footer_columns = config('admin.pages.use_footer_columns');
        $this->footer_columns_count = config('admin.pages.footer_columns_count');
    }

    protected $rules = [
        'page.order' => 'required_if:bottom,true|integer',
        'page.bottom' => 'boolean',
        'page.column' => 'required_if:bottom,true|integer|min:1|max:4',
        'page.items.*.title' => 'required|string|max:255',
        'page.items.*.text' => 'string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules ,[],[
            'page.items.*.title' => __('title'),
            'page.items.*.text' => __('text'),
            'page.order' => __('order'),
            'page.bottom' => __('bottom'),
            'page.column' => __('column'),
        ]);

        $this->page->save();

        foreach ($this->page->items as $item) {

            $item->slug = Str::slug($item->title);

            $item->save();
        }

        $this->emit('updated', ['title' => __('Page'), 'text' => __('Page was updated')]);
    }

    public function render()
    {
        return view('livewire.admin.pages.page.edit');
    }
}
