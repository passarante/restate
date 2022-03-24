<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{


    public function chageStatus(Category $category)
    {
        $category->status = !$category->status;
        $category->save();
    }

    public function render()
    {

        return view('livewire.admin.category.category-list', [
            "categories" => Category::all()
        ])
            ->layout("layouts.admin");
    }
}
