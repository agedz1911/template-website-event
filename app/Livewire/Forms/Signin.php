<?php

namespace App\Livewire\Forms;

use Filament\Notifications\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.clean')]
class Signin extends Component
{

    public $email = '';
    public $password = '';

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Notification::make()
                ->title('Successfully signed in')
                ->success()
                ->color('success')
                ->icon('heroicon-o-lock-open')
                ->send();
            return $this->redirect('/dashboard');   
        }
        // Notification::make()
        //     ->title('Invalid credentials')
        //     ->color('danger')
        //     ->iconColor('danger')
        //     ->icon('heroicon-o-x-circle')
        //     ->send();
        return back()->with('error', 'Invalid email address or password');
    }

    public function render()
    {
        return view('livewire.forms.signin');
    }
}
