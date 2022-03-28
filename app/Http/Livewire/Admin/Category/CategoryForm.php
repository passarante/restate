<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class CategoryForm extends Component
{
    use WithFileUploads;
    public $categoryId;
    public $name;
    public $subcategory_id;
    public $description;
    public $oldPhoto;
    public $photo;
    public $status = 0;


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


    public function update()
    {
        $this->validate();
        $photoPath = null;

        if ($this->photo) {

            $photoPath = $this->photo->store("categories");
        }

        Category::find($this->categoryId)->update([
            "name" => $this->name,
            "subcategory_id" => $this->subcategory_id,
            "description" => $this->description,
            "photo" => $photoPath,
            "status" => $this->status
        ]);
        return redirect()->route('categories.index');
    }

    public function mount(?Category $category)
    {
        if ($category->id) {
            $this->categoryId = $category->id;
            $this->name = $category->name;
            $this->subcategory_id = $category->subcategory_id;
            $this->description = $category->description;
            $this->oldPhoto = $category->photo;
            $this->status = $category->status;
        }
    }

    public function render()
    {

        return view('livewire.admin.category.category-form', [
            "categories" => Category::all()
        ])
            ->layout("layouts.admin");;
    }
}
