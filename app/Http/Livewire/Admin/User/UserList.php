<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{

    use WithPagination;

    public $selectedUser;
    public $perPage = 5;
    public $searchTerm = "";

    protected $listeners = [
        "deleteRecord"
    ];



    public function confirmDelete(User $user)
    {
        $this->selectedUser = $user->id;
        $this->dispatchBrowserEvent('delete-record', [
            'name' => $user->name
        ]);
    }

    public function deleteRecord()
    {
        User::findOrFail($this->selectedUser)
            ->delete();

        $this->dispatchBrowserEvent('successMessage', [
            'message' => "Kategori silindi"
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.user-list', ["users" => User::where("name", "LIKE", "%{$this->searchTerm}%")
            ->orWhere("email", "LIKE", "%{$this->searchTerm}%")
            ->paginate($this->perPage)])
            ->layout("layouts.admin");
    }
}
