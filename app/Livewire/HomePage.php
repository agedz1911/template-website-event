<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;


// *global title
#[Title('Home - 36th Weekend Course on Cardiology')]

// class HomePage extends Component
// {
//     public User $user;

//     public function render()
//     {
//         return view('livewire.home-page')->title($this->user->name);
//     }
// }
class HomePage extends Component
{

    public function render()
    {
        return view('livewire.home-page');
    }
}
