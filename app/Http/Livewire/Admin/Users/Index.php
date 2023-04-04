<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = [
            'users' => User::orderBy('id','asc')->get(),
            'title' => 'Kelola users',
        ];
        return view('livewire.admin.users.index', $data);
    }
}
