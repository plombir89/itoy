<?php

namespace App\Http\Livewire\Admin\Settings\Site;

use Livewire\Component;
use Livewire\WithFileUploads;
use function MongoDB\BSON\toJSON;

class Support extends Component
{
    use WithFileUploads;

    public $site_name;
    public $status;
    public $start_date;
    public $favicon;
    public $show_favicon;

    protected $support;

    public function mount(){
        $support = \App\Models\Support::findOr(1, function () {
            return \App\Models\Support::create([
                'id' => 1,
                'site_name' => 'Laravel',
                'start_date' => now(),
                'status' => 1,
                'favicon' => 'favicon/favicon.png',
            ]);
        });
        $this->site_name = $support->site_name;
        $this->status = $support->status;
        $this->start_date = $support->start_date->format('d.m.Y');
        $this->show_favicon = $support->favicon;

        $this->support = $support;

    }

    protected $rules = [
        'site_name' => 'max:255',
        'status' => 'boolean',
        'favicon' => 'nullable|mimes:png,ico|dimensions:max_width=32,max_height=32',
        'start_date' => 'required|date',
    ];


    public function save()
    {
        $data = $this->validate();

        $supp = \App\Models\Support::first();

        if($this->favicon){

            $extension = $this->favicon->getClientOriginalExtension();

            $image = $this->favicon->storeAs('favicon', 'favicon.'.$extension);

            $supp->favicon = $image;
        }


        $supp->site_name = $data['site_name'];
        $supp->status = $data['status'];
        $supp->start_date = $data['start_date'];

        $supp->update();

        $this->show_favicon = $supp->favicon;
        $this->emit('supportSaved', ['title' => __('Support'), 'text' => __('Data saved successful')]);
    }

    public function render()
    {
        return view('livewire.admin.settings.site.support');
    }
}
