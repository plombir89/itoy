<?php

namespace App\Http\Livewire\Admin\Content\News;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class NewsIndex extends Component
{
    public $news;
    public $newsToRemove = null;

    protected $listeners = ['openmodal', 'remove'];

    public function mount(){
        $this->news = News::with('item.language')->take(15)->get();
    }

    public function openmodal(News $news){
        $this->newsToRemove = $news;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove()
    {
        Storage::delete($this->newsToRemove->img);
        $this->newsToRemove->delete();
        $this->dispatchBrowserEvent('updatetable');
    }

    public function render()
    {
        return view('livewire.admin.content.news.news-index');
    }
}
