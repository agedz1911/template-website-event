<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.dashboard')]
class HomeDashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.home-dashboard');
    }
}
