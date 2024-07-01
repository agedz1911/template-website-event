<?php

namespace App\Livewire\Forms;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Signout extends Component
{

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        Notification::make()
            ->title('Successfully logged out')
            ->success()
            ->send();
        Alert::success('success', 'Successfully logged out');
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.forms.signout');
    }
}
