<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.dashboard')]

#[Title('Dashboard')]
class HomeDashboard extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.dashboard.home-dashboard', ['user' => $user]);
    }
}
