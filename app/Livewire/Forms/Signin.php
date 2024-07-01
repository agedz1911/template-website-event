<?php

namespace App\Livewire\Forms;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Success', 'Successfully signed in');
            return redirect()->intended('/');
        }

        return back()->with('error', 'Invalid credentials');
    }
    
    public function render()
    {
        return view('livewire.forms.signin');
    }
}
