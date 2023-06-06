<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $role = 1;
    public $email;
    public $name;
    public $password;
    public $conf_password;

    public array $roles = [];

    protected array $rules = [];

    public function mount()
    {
        $this->rules = $this->rules();
        $this->roles = [
            ['id' => Role::SUPER_ADMIN, 'name' => Role::where('id', Role::SUPER_ADMIN)->first()->name],
            ['id' => Role::ADMIN, 'name' => Role::where('id', Role::ADMIN)->first()->name],
        ];

    }

    public function rules()
    {
        return [
            'role' => 'required|in:1,2',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|same:conf_password'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveUser(){

        $data = $this->validate();

        User::factory()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role'],
            'password' => bcrypt($data['password'])
        ]);

        $this->reset();
        $this->mount();

        $this->emit('userCreated');
        $this->dispatchBrowserEvent('userCreated');
    }


    public function render()
    {
        return view('livewire.admin.user.user-create');
    }
}
