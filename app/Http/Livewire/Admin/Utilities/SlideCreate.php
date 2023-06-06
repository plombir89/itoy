<?php

namespace App\Http\Livewire\Admin\Utilities;

use App\Models\Language;
use App\Models\SlideLinks;
use Livewire\Component;
use Livewire\WithFileUploads;

class SlideCreate extends Component
{
    use WithFileUploads;

    // TODO: De rezolvat aici

    public $slide;

    public $expanded = false;
    public $img;

    public $langs;

    public function mount()
    {

        $this->langs = Language::getAdminLangs();

        $order = \App\Models\Slide::orderBy('order', 'DESC')->first();

        $this->slide['order'] = $order ? $order->order + 1 : 1;

        foreach ($this->langs as $lang) {
            $this->slide['links'][$lang->id]['link'] = '';
        }
    }

    protected $validationAttributes = [
        'slide.links.1.link' => 'link',
        'slide.links.2.link' => 'link',
        'slide.links.3.link' => 'link',
        'slide.links.4.link' => 'link',
        'slide.links.5.link' => 'link',
        'slide.links.6.link' => 'link',
        'slide.links.7.link' => 'link',
        'slide.links.8.link' => 'link',
        'slide.published' => 'published',
        'slide.order' => 'order'
    ];

    public function updated($field)
    {
        $this->validateOnly($field, $this->myRules());
    }

    public function save()
    {
        $data = $this->validate($this->myRules());
        //dd($data['slide']);
        $image = $this->img->store('slide');

        $slide = \App\Models\Slide::create([
            'order' => $data['slide']['order'],
            'published' => $data['slide']['published'] ?? false,
            'img' => $image,
        ]);

        foreach ($data['slide']['links'] as $index => $link) {

            SlideLinks::create([
                'slide_id' => $slide->id,
                'lang' => $index,
                'link' => $link['link']
            ]);
        }

        $this->emit( 'slideCreated');

        $order = \App\Models\Slide::orderBy('order', 'DESC')->first();

        $this->slide['order'] = $order ? $order->order + 1 : 1;

        $this->slide['published'] = false;
        $this->img = null;
        $this->mount();

    }

    protected function myRules(){

        $rule = [
            'slide.published' => 'nullable|boolean',
            'slide.order' => 'required|integer|min:1',
            'img' => 'required|image|dimensions:width='.config('admin.slider.image_upload_width').',height='.config('admin.slider.image_upload_height')
        ];

        foreach ($this->langs as $lang){
            $rule['slide.links.'.$lang->id.'.link'] = ['nullable','url'];
        }

        return $rule;
    }

    public function render()
    {
        return view('livewire.admin.utilities.slide-create');
    }
}
