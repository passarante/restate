<?php

namespace App\Http\Livewire\Admin\Feature;

use App\Models\ListingFeature;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class FeatureForm extends Component
{


    public $featureId;
    public $name;
    public $icon;
    public $status = 1;

    public $icons = [
        "fal fa-dumbbell",
        "fal fa-wifi",
        "fal fa-parking",
        "fal fa-cloud",
        "fal fa-swimmer",
        "fal fa-cctv",
        "fal fa-washer",
        "fal fa-utensils",
        "fal fa-deer",
        "fal fa-deer-rudolph",
        "fab fa-delicious",
        "fal fa-democrat",
        "fal fa-deploydog",
        "fal fa-deskpro",
        "fal fa-desktop",
        "fal fa-desktop-alt",
        "fal fa-dev",
        "fal fa-deviantart",
        "fal fa-dewpoint",
        "fal fa-dharmachakra",
        "fal fa-dhl",
        "fal fa-diagnoses",
        "fal fa-diamond",
        "fal fa-diaspora",
        "fal fa-dice",
        "fal fa-dice-d10",
        "fal fa-dice-d12",
        "fal fa-dice-d20",
        "fal fa-dice-d4",
        "fal fa-dice-d6",
        "fal fa-dice-d8",
        "fal fa-dice-five",
        "fal fa-dice-four",
        "fal fa-dice-one",
        "fal fa-dice-six",
        "fal fa-dice-three",
        "fal fa-dice-two",
        "fal fa-digg",
        "fal fa-digging",
        "fal fa-digital-ocean",
        "fal fa-digital-tachograph",
        "fal fa-diploma",
        "fal fa-directions",
        "fal fa-disc-drive",
        "fal fa-discord",
        "fal fa-discourse",
        "fal fa-disease",
        "fal fa-divide",
        "fal fa-dizzy",
        "fal fa-dna",
        "fal fa-do-not-enter",
        "fal fa-dochub",
        "fal fa-docker",
        "fal fa-dog",
        "fal fa-dog-leashed",
        "fal fa-dollar-sign",
        "fal fa-dolly",
        "fal fa-dolly-empty",
        "fal fa-dolly-flatbed",
        "fal fa-dolly-flatbed-alt",
        "fal fa-dolly-flatbed-empty",
        "fal fa-donate",
        "fal fa-door-closed",
        "fal fa-door-open",
        "fal fa-dot-circle",
        "fal fa-dove",
        "fal fa-download",
        "fal fa-draft2digital",
        "fal fa-drafting-compass",
        "fal fa-dragon",
        "fal fa-draw-circle",
        "fal fa-draw-polygon",
        "fal fa-draw-square",
        "fal fa-dreidel",
        "fal fa-dribbble",
        "fal fa-dribbble-square",
        "fal fa-drone",
        "fal fa-drone-alt",
        "fal fa-dropbox",
        "fal fa-drum",
        "fal fa-drum-steelpan",
        "fal fa-drumstick",
        "fal fa-drumstick-bite",
        "fal fa-drupal",
        "fal fa-dryer",
        "fal fa-dryer-alt"
    ];


    protected $rules = [
        "name" => "required|min:3|max:50",
        "icon" => "required",
    ];

    public function save()
    {
        $this->validate();

        ListingFeature::create([
            "name" => $this->name,
            "icon" => $this->icon,
            "status" => $this->status,
        ]);

        Session::flash("successMessage", "Özellik eklendi");
        return redirect()->route('features.index');
    }

    public function render()
    {
        return view('livewire.admin.feature.feature-form')
            ->layout("layouts.admin");
    }
}
