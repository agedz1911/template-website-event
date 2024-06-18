<?php

namespace App\Livewire\Resources;

use App\Models\RegInfo as ModelsRegInfo;
use Livewire\Component;

class RegInfo extends Component
{
    public function render()
    {
        $regInfomations = ModelsRegInfo::all();
        return view('livewire.resources.reg-info', ['regInfomations' => $regInfomations]);
    }
}
