<?php

namespace App\Http\Livewire\Admin\User;

use Illuminate\Validation\Rule;
use Livewire\Component;

class UserEdit extends Component
{
    public $user;
    public $password;
    public $conf_password;

    protected array $rules = [];

    public function mount()
    {
        $this->user = auth()->user();
        $this->rules = $this->rules();
    }

    public function rules()
    {
        return [
            'user.name' => 'required|string',
            'user.email' => [
                'required',
                Rule::unique('users','email')->ignore($this->user->id)
            ],
            'password' => 'nullable|string|min:6|same:conf_password'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        if($this->password){
            $this->user->password = bcrypt($this->password);
        }

        $this->user->save();

        session()->flash('updated', __('User information changed'));
    }

    public function render()
    {
        return view('livewire.admin.user.user-edit');
    }
}
