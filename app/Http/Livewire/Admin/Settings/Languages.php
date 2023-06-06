<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Events\LanguageChanged;
use App\Models\Language;
use Livewire\Component;

class Languages extends Component
{
    public $newlanguages = [];
    public $languages = [];

    public $addlang = null;

    public $langToRemove = null;

    public $langs = [];

    public function mount(){

        $this->resetModelLangs();
        $this->resetLangs();

    }

    private function resetModelLangs(){
        $l = Language::getAdminLangs();

        foreach ($l as $lang){
            $this->langs[$lang->prefix] = [
                'active' => $lang->active > 0 ? true : false,
                'listorder' => $lang->listorder,
            ];
        }
        $this->langs['default'] = Language::where('default', 1)->first()->prefix;
    }

    public function updatedLangs()
    {
        Language::where('default' , 1)->update(['default' => 0]);

        Language::where('prefix', $this->langs['default'])->update(['default' => 1, 'active' => 1]);

        $l = $this->langs;

        $this->languages->map(function($lang) use($l) {

            if($this->langs['default'] == $lang->prefix){
                $active = 1;
            }else{
                $active = $this->langs[$lang->prefix]['active'] === true ? 1 : -1;
            }

            Language::where('prefix' , $lang->prefix)->update([
                'listorder' => (int) $this->langs[$lang->prefix]['listorder'],
                'active' => $active
            ]);

        });

        $this->resetLangs();
        $this->resetModelLangs();
    }

    protected $listeners = ['removeLang' => 'remove'];

    public function add()
    {
        if(is_null($this->addlang)){
            $this->dispatchBrowserEvent('selectLang', ['title' => __('Add language'), 'text' => __('Please select language to add')]);
            return;
        }

        $lang = Language::where('prefix', $this->addlang)->first();

        if(!$lang){
            $this->dispatchBrowserEvent('error', ['title' => __('Error'), 'text' => __('Oops something goes wrong...')]);
            return;
        }

        $order = Language::orderBy('listorder', 'desc')->first()->listorder + 1;

        $lang->update([
            'active' => -1,
            'listorder' => $order
        ]);

        $this->langs[$lang->prefix]['listorder'] = $order;

        $this->dispatchBrowserEvent('langAdded', ['title' => __('Add language'), 'text' => $lang->title.__(' language was added successful')]);

        LanguageChanged::dispatch($lang, 'add');

        $this->resetModelLangs();
        $this->resetLangs();

    }

    public function setLangToRemove($prefix){
        $this->langToRemove = $prefix;
        $this->dispatchBrowserEvent('openmodal');
    }

    public function remove(){

        //dd($this->langToRemove);

        $lang = Language::where('prefix', $this->langToRemove)->first();

        if(!$lang){
            $this->dispatchBrowserEvent('error', ['title' => __('Error'), 'text' => __('Oops something goes wrong...')]);
            return;
        }

        if($lang->default){
            $this->dispatchBrowserEvent('cantDelete', ['title' => __('Remove language'), 'text' => __('Default lang can\'t be removed')]);
            return;
        }

        $lang->update([
            'active' => 0,
            'listorder' => 0
        ]);

        $this->dispatchBrowserEvent('langRemoved', ['title' => __('Remove language'), 'text' => $lang->title.__(' language was removed successful')]);

        $this->resetLangs();

        LanguageChanged::dispatch($lang, 'remove');
    }

    private function resetLangs(){
        $this->newlanguages = Language::addLangs();
        $this->languages = Language::getAdminLangs();
        $this->addlang = null;
    }

    public function render()
    {
        return view('livewire.admin.settings.languages');
    }
}
