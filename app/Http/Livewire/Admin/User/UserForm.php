<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class UserForm extends Component
{
    public function render()
    {
        return view('livewire.admin.user.user-form')
            ->layout("layouts.admin");
    }
}
