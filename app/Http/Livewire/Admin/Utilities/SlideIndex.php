<?php

namespace App\Http\Livewire\Admin\Utilities;

use Livewire\Component;

class SlideIndex extends Component
{
    public $slides;

    public $slideToRemove = 0;

    protected $listeners = ['slideCreated','slideDeleted', 'removeSlide', 'setRemoveSlide'];

    public function slideCreated()
    {
        $this->getSlides();

        $this->emit('slideCreatedMessage', ['title' => __('Slide'), 'text' => __('Slide created')]);
    }

    public function removeSlide()
    {
        $this->slideToRemove->delete();
        $this->emit( 'slideDeleted');
    }

    public function setRemoveSlide(\App\Models\Slide $slide)
    {
        $this->slideToRemove = $slide;
    }

    public function slideDeleted()
    {
        $this->getSlides();

        $this->emit('slideDeletedMessage', ['title' => __('Slide'), 'text' => __('Slide deleted')]);
    }

    public function mount()
    {
        $this->getSlides();
    }

    protected function getSlides(){
        $this->slides = \App\Models\Slide::with('links.language')->orderBy('order', 'ASC')->get();
    }

    public function render()
    {
        return view('livewire.admin.utilities.slide-index');
    }
}
