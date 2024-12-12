<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class EditUser extends Component
{

    public $user;
    public $name;
    public $email;
    public $role;

    public function mount($id){
       $this->user = User::find($id);

        if ($this->user) {
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->role = $this->user->roles->first()->id;
        }
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.edit-user', [
            'roles' => $roles
        ]);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
        ]);

        $this->user->roles()->sync($this->role);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

            session()->flash('flash.banner', $this->name . ' (' . $this->user->id . ')' . ' actualizado/a.');
        return $this->redirect('/users/' . $this->user->id);
    }
}
