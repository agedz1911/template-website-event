<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Scientific Program - 36th Weekend Course on Cardiology')]
class ScientificProgram extends Component
{
    public function render()
    {
        return view('livewire.pages.scientific-program');
    }
}
