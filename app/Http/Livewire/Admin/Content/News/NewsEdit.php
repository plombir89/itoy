<?php

namespace App\Http\Livewire\Admin\Content\News;

use App\Models\Language;
use App\Models\NewsCategoryData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsEdit extends Component
{
    use WithFileUploads;

    public $news;
    public $img;
    public $tab_active = 0;

    public $categories;

    public function mount()
    {
        $start_date = Carbon::create($this->news->start_date);
        $this->news->start_date = $start_date->format('d.m.Y');
        $this->categories = NewsCategoryData::where('lang', Language::defaultLang()->id)->get();
    }

    protected $rules = [
        'news.published' => 'boolean',
        'news.category_id' => 'required|exists:news_categories,id',
        'news.start_date' => 'required|date',
        'news.items.*.title' => 'required|string|max:255',
        'news.items.*.text' => 'string'
    ];

    protected $validationAttributes = [
        'news.items.*.title' => 'title',
        'news.items.*.text' =>'text',
        'news.published' => 'published',
        'news.category_id' => 'category',
        'news.start_date' => 'start date'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules + [
            'img' => 'nullable|image|dimensions:width='.config('admin.news.image_upload_width').',height='.config('admin.news.image_upload_height')
        ],[],[
            'news.items.*.title' => __('title'),
            'news.items.*.text' => __('text'),
            'news.published' => __('published'),
            'news.category_id' => __('category'),
            'news.start_date' => __('start date')
        ]);

        if($this->img){
            $image = $this->img->store('news');

            Storage::delete($this->news->img);

            $this->news->img = $image;
        }

        $start_date = Carbon::create($this->news->start_date);
        $this->news->start_date = $start_date->format('y-m-d');

        $this->news->save();

        foreach ($this->news->items as $item) {

            $item->slug = Str::slug($item->title);

            $item->save();
        }

        $start_date = Carbon::create($this->news->start_date);
        $this->news->start_date = $start_date->format('d.m.Y');

        $this->emit('updated', ['title' => __('News'), 'text' => __('News was updated')]);
    }


    public function render()
    {
        return view('livewire.admin.content.news.news-edit');
    }
}
