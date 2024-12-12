<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $query;

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.list-users', [
            'users' => User::where('name', 'like', '%' . $this->query . '%')->paginate(20),
        ]);
    }
}
