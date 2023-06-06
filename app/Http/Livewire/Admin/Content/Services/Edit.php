<?php

namespace App\Http\Livewire\Admin\Content\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $services;
    public $img;
    public $tab_active = 0;

    protected $rules = [
        'services.published' => 'boolean',
        'services.items.*.title' => 'required|string|max:255',
        'services.items.*.text' => 'string'
    ];

    protected $validationAttributes = [
        'services.items.*.title' => 'title',
        'services.items.*.text' =>'text',
        'services.published' => 'published'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate($this->rules + [
            'img' => 'nullable|image|dimensions:width='.config('admin.services.image_upload_width').',height='.config('admin.services.image_upload_height')
        ],[],[
            'services.items.*.title' => __('title'),
            'services.items.*.text' => __('text'),
            'services.published' => __('published')
        ]);

        if($this->img){
            $image = $this->img->store('services');

            Storage::delete($this->services->img);

            $this->services->img = $image;
        }

        $this->services->save();

        foreach ($this->services->items as $item) {

            $item->slug = Str::slug($item->title);

            $item->save();
        }

        $this->emit('updated', ['title' => __('Services'), 'text' => __('Services was updated')]);
    }


    public function render()
    {
        return view('livewire.admin.content.services.edit');
    }
}
