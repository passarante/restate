<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{

    use WithPagination;

    public $selectedCategory;
    public $perPage = 5;
    public $searchTerm = "";

    protected $listeners = [
        "deleteRecord"
    ];

    public function changeStatus(Category $category)
    {
        $category->status = !$category->status;
        $category->save();
    }

    public function confirmDelete(Category $category)
    {
        $this->selectedCategory = $category->id;
        $this->dispatchBrowserEvent('delete-record', [
            'name' => $category->name
        ]);
    }

    public function deleteRecord()
    {
        Category::findOrFail($this->selectedCategory)
            ->delete();

        $this->dispatchBrowserEvent('successMessage', [
            'message' => "Kategori silindi"
        ]);
    }

    public function render()
    {

        return view('livewire.admin.category.category-list', [
            "categories" => Category::where("name", "LIKE", "%{$this->searchTerm}%")
                ->orWhere("description", "LIKE", "%{$this->searchTerm}%")
                ->paginate($this->perPage)
        ])
            ->layout("layouts.admin");
    }
}
