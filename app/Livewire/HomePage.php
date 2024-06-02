<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $title = 'Congress Event Template';


    public function render()
    {
        return view('livewire.home-page');
    }
}
