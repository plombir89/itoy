<?php

namespace App\Http\Livewire\Admin\Pages;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    use WithFileUploads;

    public $about;
    public $img;
    public $tab_active = 0;
    public $tab_content_active = 0;
    public $tab_why_active = 0;

    protected $rules = [
        'about.why' => 'boolean',
        'about.items.*.title' => 'required|string|max:255',
        'about.items.*.text' => 'nullable|string',
        'about.items.*.content' => 'nullable|string',
        'about.items.*.why_title' => 'nullable|string|required_if:about.why,true',
        'about.items.*.why_content' => 'nullable|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules + [
                'img' => 'nullable|image|dimensions:width=600,height=600'
            ] ,[],[
            'about.items.*.title' => __('title'),
            'about.items.*.text' => __('text'),
            'about.items.*.content' => __('content'),
            'about.items.*.why_title' => __('why title'),
            'about.items.*.why_content' => __('why content'),
            'about.why' => __('Why Eco Tech?')
        ]);

        if($this->img){
            $image = $this->img->store('about');

            Storage::delete($this->about->img);

            $this->about->img = $image;
        }

        $this->about->save();

        foreach ($this->about->items as $item) {
            $item->save();
        }

        $this->emit('updated', ['title' => __('About'), 'text' => __('About was updated')]);
    }
    public function render()
    {
        return view('livewire.admin.pages.about');
    }
}
