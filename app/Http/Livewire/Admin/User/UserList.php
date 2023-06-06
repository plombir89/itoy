<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UserList extends Component
{
    public $users;
    public $delete = null;

    protected $listeners = ['userCreated' => 'mount', 'remove', 'openmodal'];

    public function mount()
    {
        $this->users = User::with('role')->get();
    }

    public function openmodal($id){
        $this->delete = $id;

        $this->dispatchBrowserEvent('modal_delete_user');
    }

    public function remove()
    {
        if($this->delete == auth()->id()){
            return false;
        }

        $user = User::find($this->delete);

        if(!$user){
            return false;
        }

        $user->delete();
        $this->mount();

    }

    public function render()
    {
        return view('livewire.admin.user.user-list');
    }
}
