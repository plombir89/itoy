<?php

namespace App\Http\Livewire\Admin\Content\Services;

use App\Models\Language;
use App\Models\Service;
use App\Models\ServiceData;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $services;
    public $services_data;
    public $img;

    public function mount()
    {
        $services = new Service([
            'published' => false
        ]);

        foreach (Language::getAdminLangs() as $lang){
            $services_data[$lang->id] = new ServiceData([
                'title' => '',
                'text' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->services = $services;
        $this->services_data = $services_data;
    }

    protected $rules = [
        'services.published' => 'boolean',
        'services_data.*.title' => 'required|string|max:255',
        'services_data.*.text' => 'string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate([
            'services.published' => 'boolean',
            'services_data.*.title' => 'required|string|max:255',
            'services_data.*.text' => 'string',
            'img' => 'required|image|dimensions:width='.config('admin.services.image_upload_width').',height='.config('admin.services.image_upload_height')
        ],[],[
            'services_data.*.title' => __('title'),
            'services_data.*.text' => __('text'),
            'services.published' => __('published')
        ]);


        $image = $this->img->store('services');


        $services = Service::create([
            'published' => $data['services']['published'],
            'img' => $image
        ]);

        foreach ($data['services_data'] as $index => $item){
            ServiceData::create([
                'title' => $item['title'],
                'text' => $item['text'],
                'slug' => Str::slug($item['title']),
                'lang' => $index,
                'service_id' => $services->id
            ]);
        }

        return redirect()->route('admin.content.services.index')->with('services_added', __('You add new service item'));
    }

    public function render()
    {
        return view('livewire.admin.content.services.create');
    }
}
