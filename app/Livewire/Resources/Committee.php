<?php

namespace App\Livewire\Resources;

use App\Models\Committee as ModelsCommittee;
use Livewire\Component;

class Committee extends Component
{
    public function render()
    {
        $committees = ModelsCommittee::all();
        $uniqueCategories = $committees->pluck('category')->unique();
        return view('livewire.resources.committee', ['committees' => $committees, 'uniqueCategories' => $uniqueCategories]);
    }
}
