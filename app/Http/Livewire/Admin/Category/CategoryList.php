<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{

    public $selectedCategory;
    protected $listeners = [
        "deleteRecord"
    ];

    public function chageStatus(Category $category)
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
            "categories" => Category::all()
        ])
            ->layout("layouts.admin");
    }
}
