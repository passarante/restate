<?php

namespace App\Http\Livewire\Admin\Feature;

use App\Models\ListingFeature;
use Livewire\Component;
use Livewire\WithPagination;

class FeatureList extends Component
{

    use WithPagination;

    public $selectedFeature;
    public $perPage = 5;
    public $searchTerm = "";

    protected $listeners = [
        "deleteRecord"
    ];

    public function changeStatus(ListingFeature $feature)
    {
        $feature->status = !$feature->status;
        $feature->save();
    }

    public function confirmDelete(ListingFeature $feature)
    {

        $this->selectedFeature = $feature->id;

        $this->dispatchBrowserEvent('delete-record', [
            'name' => $feature->name
        ]);
    }

    public function deleteRecord()
    {

        ListingFeature::findOrFail($this->selectedFeature)
            ->delete();

        $this->dispatchBrowserEvent('successMessage', [
            'message' => "Özellik silindi"
        ]);
    }

    public function render()
    {
        return view('livewire.admin.feature.feature-list', [
            "features" => ListingFeature::where("name", "LIKE", "%{$this->searchTerm}%")
                ->paginate($this->perPage)
        ])
            ->layout("layouts.admin");
    }
}
