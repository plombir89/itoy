<?php

namespace App\Http\Livewire\Admin\Pages\Page;

use App\Models\Language;
use App\Models\Page;
use App\Models\PageData;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $page;
    public $page_data;
    public $use_footer_columns;
    public $footer_columns_count;

    public function mount()
    {
        $this->use_footer_columns = config('admin.pages.use_footer_columns');
        $this->footer_columns_count = config('admin.pages.footer_columns_count');

        $page = new Page([
            'order' => 0,
            'bottom' => false,
            'column' => 1,
        ]);

        foreach (Language::getAdminLangs() as $lang){
            $page_data[$lang->id] = new PageData([
                'title' => '',
                'text' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->page = $page;
        $this->page_data = $page_data;
    }

    protected $rules = [
        'page.order' => 'required_if:bottom,true|integer',
        'page.bottom' => 'boolean',
        'page.column' => 'required_if:bottom,true|integer|min:1|max:4',
        'page_data.*.title' => 'required|string|max:255',
        'page_data.*.text' => 'string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate($this->rules,[],[
            'page_data.*.title' => __('title'),
            'page_data.*.text' => __('text'),
            'page.order' => __('order'),
            'page.bottom' => __('bottom'),
            'page.column' => __('column'),
        ]);

        $page = Page::create([
            'order' => $data['page']['order'],
            'bottom' => $data['page']['bottom'],
            'column' => $data['page']['column'],
        ]);

        foreach ($data['page_data'] as $index => $item){
            PageData::create([
                'title' => $item['title'],
                'text' => $item['text'],
                'slug' => Str::slug($item['title']),
                'lang' => $index,
                'page_id' => $page->id
            ]);
        }

        return redirect()->route('admin.pages.page.index')->with('page_added', __('You add new page'));
    }

    public function render()
    {
        return view('livewire.admin.pages.page.create');
    }
}
