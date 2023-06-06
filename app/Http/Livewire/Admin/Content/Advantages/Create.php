<?php

namespace App\Http\Livewire\Admin\Content\Advantages;

use App\Models\Advantages;
use App\Models\AdvantagesData;
use App\Models\Language;
use App\Models\ServiceData;
use Livewire\Component;

class Create extends Component
{
    public $advantages;
    public $advantages_data;
    public $img;

    public function mount()
    {
        $advantages = new Advantages([
            'published' => false,
            'order' => 0,
            'icon' => ''
        ]);

        foreach (Language::getAdminLangs() as $lang){
            $advantages_data[$lang->id] = new AdvantagesData([
                'title' => '',
                'content' => '',
                'icon' => $lang->icon
            ]);
        }

        $this->advantages = $advantages;
        $this->advantages_data = $advantages_data;
    }

    protected $rules = [
        'advantages.published' => 'boolean',
        'advantages.icon' => 'required|string',
        'advantages.order' => 'required|integer',
        'advantages_data.*.title' => 'required|string|max:255',
        'advantages_data.*.content' => 'string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate([
            'advantages.published' => 'boolean',
            'advantages.icon' => 'required|string',
            'advantages.order' => 'required|integer',
            'advantages_data.*.title' => 'required|string|max:255',
            'advantages_data.*.content' => 'string'
        ],[],[
            'advantages_data.*.title' => __('title'),
            'advantages_data.*.content' => __('content'),
            'advantages.published' => __('published'),
            'advantages.icon' => __('Icon'),
            'advantages.order' => __('Order'),
        ]);

        $advantages = Advantages::create([
            'published' => $data['advantages']['published'],
            'icon' => $data['advantages']['icon'],
            'order' => $data['advantages']['order']
        ]);

        foreach ($data['advantages_data'] as $index => $item){
            AdvantagesData::create([
                'title' => $item['title'],
                'content' => $item['content'],
                'lang' => $index,
                'advantage_id' => $advantages->id
            ]);
        }

        return redirect()->route('admin.content.advantages.index')->with('advantages_added', __('You add new advantage item'));
    }

    public function render()
    {
        return view('livewire.admin.content.advantages.create');
    }
}
