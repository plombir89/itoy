<?php

namespace App\Http\Livewire\Admin\Settings\Site;

use App\Models\HomePageSeo;
use Livewire\Component;

class HomeSeo extends Component
{
    public $data = [];

    protected $rules = [
        'data.info.*.title' => 'max:160',
        'data.info.*.description' => 'max:160',
        'data.info.*.keywords' => 'max:160',
    ];

    public function mount()
    {
        $this->data = HomePageSeo::with('info.language')->first();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();

        foreach ($this->data->info as $seo) {
            $seo->save();
        }

        $this->emit('seoSaved', ['title' => __('Home page seo'), 'text' => __('Data saved successful')]);
    }

    public function render()
    {
        return view('livewire.admin.settings.site.home-seo');
    }
}
