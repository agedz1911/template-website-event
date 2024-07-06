<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Submission - 36th Weekend Course on Cardiology')]
class Submission extends Component
{

    public function render()
    {
        $user = auth()->user();
        return view('livewire.pages.submission',['user' => $user]);
    }
}
