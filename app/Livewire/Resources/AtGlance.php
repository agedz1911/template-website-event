<?php

namespace App\Livewire\Resources;

use App\Models\AtGlance as ModelsAtGlance;
use Livewire\Component;

class AtGlance extends Component
{
    public function render()
    {
        $atglances = ModelsAtGlance::all();
        return view('livewire.resources.at-glance', ['atglances' => $atglances]);
    }
}
