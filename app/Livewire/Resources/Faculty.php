<?php

namespace App\Livewire\Resources;

use App\Models\faculty as ModelsFaculty;
use Livewire\Component;

class Faculty extends Component
{
    public function render()
    {
        $faculties = ModelsFaculty::where('is_active', 1)->get();
        return view('livewire.resources.faculty', ['faculties' => $faculties]);
    }
}
