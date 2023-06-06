<?php

namespace App\Http\Livewire\Admin\Content\News;

use Livewire\Component;

class NewsEditSeo extends Component
{
    public $news;

    protected $rules = [
        'news.items.*.description' => 'nullable|string|max:255',
        'news.items.*.keywords' => 'nullable|string|max:255',
    ];

    protected $validationAttributes = [
        'news.items.*.description' => 'description',
        'news.items.*.keywords' =>'keywords',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules,[],[
            'news.items.*.description' => __('description'),
            'news.items.*.keywords' => __('keywords'),
        ]);

        foreach ($this->news->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('News'), 'text' => __('News seo was updated')]);
    }
    public function render()
    {
        return view('livewire.admin.content.news.news-edit-seo');
    }
}
