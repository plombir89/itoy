<?php

namespace App\Http\Livewire\Admin\Utilities;

use Livewire\Component;
use Livewire\WithFileUploads;

class Slide extends Component
{
    use WithFileUploads;

    public $slide;

    public $expanded = false;
    public $img;

    public function mount($slide)
    {
        $this->slide = $slide;
    }

    protected $rules = [
        'slide.links.*.link' => 'url',
        'slide.published' => 'boolean',
        'slide.order' => 'required|integer|min:1',
    ];

    protected $validationAttributes = [
        'slide.links.*.link' => 'link',
        'slide.published' => 'published',
        'slide.order' => 'order'
    ];

    public function openmodal($slide){
        $this->emitUp( 'setRemoveSlide', $slide);
        $this->dispatchBrowserEvent('openmodal');
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate([
            'img' => 'nullable|image|dimensions:width='.config('admin.slider.image_upload_width').',height='.config('admin.slider.image_upload_height'),
            'slide.links.*.link' => 'url',
            'slide.published' => 'boolean',
            'slide.order' => 'required|integer|min:1'
        ]);

        try {

            if($this->img){
                $image = $this->img->store('slide');

                $this->slide->img = $image;
            }


            $this->slide->save();

            foreach ($this->slide->links as $link) {

                $link->save();

            }

            session()->flash('text', __('Slide updated'));

            $this->expanded = false;

        }catch (\Exception $e){

        }

    }

    public function render()
    {
        return view('livewire.admin.utilities.slide');
    }
}
