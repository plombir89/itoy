<?php

namespace App\Http\Livewire\Admin\Content\News;

use App\Models\Language;
use App\Models\News;
use App\Models\NewsData;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsCreate extends Component
{
    use WithFileUploads;

    public $news;
    public $news_data;
    public $img;

    public function mount()
    {
        $news = new News([
            'published' => false,
            'start_date' => now()->format('d.m.Y')
        ]);

        foreach (Language::getAdminLangs() as $lang){
            $news_data[$lang->id] = new NewsData([
                'title' => '',
                'text' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->news = $news;
        $this->news_data = $news_data;
    }

    protected $rules = [
        'news.published' => 'boolean',
        'news.start_date' => 'required|date',
        'news_data.*.title' => 'required|string|max:255',
        'news_data.*.text' => 'string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate([
            'news.published' => 'boolean',
            'news.start_date' => 'required|date',
            'news_data.*.title' => 'required|string|max:255',
            'news_data.*.text' => 'string',
            'img' => 'required|image|dimensions:width='.config('admin.news.image_upload_width').',height='.config('admin.news.image_upload_height')
        ],[],[
            'news_data.*.title' => __('title'),
            'news_data.*.text' => __('text'),
            'news.published' => __('published'),
            'news.start_date' => __('start date')
        ]);

        //dd($data);

        $image = $this->img->store('news');

        $start_date = Carbon::create($data['news']['start_date']);

        $news = News::create([
            'published' => $data['news']['published'],
            'start_date' => $start_date->format('y-m-d'),
            'img' => $image
        ]);

        foreach ($data['news_data'] as $index => $item){
            NewsData::create([
                'title' => $item['title'],
                'text' => $item['text'],
                'slug' => Str::slug($item['title']),
                'lang' => $index,
                'news_id' => $news->id
            ]);
        }

        return redirect()->route('admin.content.news.index')->with('news_added', __('You add new news item'));
    }

    public function render()
    {
        return view('livewire.admin.content.news.news-create');
    }
}
