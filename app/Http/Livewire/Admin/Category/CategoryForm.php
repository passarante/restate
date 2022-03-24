<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class CategoryForm extends Component
{
    use WithFileUploads;
    public $name;
    public $subcategory_id;
    public $description;
    public $photo;
    public $status = 1;

    protected $rules = [
        "name" => "required|min:3|max:50"
    ];


    public function save()
    {

        $this->validate();
        $photoPath = null;

        if ($this->photo) {

            $photoPath = $this->photo->store("categories");
        }

        Category::create([
            "name" => $this->name,
            "subcategory_id" => $this->subcategory_id,
            "description" => $this->description,
            "photo" => $photoPath,
            "status" => $this->status
        ]);
        return redirect()->route('categories.index');
    }

    public function render()
    {
        return view('livewire.admin.category.category-form', [
            "categories" => Category::all()
        ])
            ->layout("layouts.admin");;
    }
}
