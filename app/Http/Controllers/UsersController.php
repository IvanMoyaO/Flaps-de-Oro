<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    use WithPagination;

    public function render()
    {
        return view('users.show', [
            'users' => User::paginate(10)
        ]);
    }

    public function edit(int $id)
    {
        return view('users.edit', [
            'id' => $id,
        ]);
    }

}
