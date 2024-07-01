<?php

namespace App\Livewire\Forms;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use App\Models\User;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class Signup extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected User $user;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('First Name')->required(),
                TextInput::make('last_name')->required(),
                TextInput::make('email')->required()->unique(),
                TextInput::make('password')
                    ->required()
                    ->password()
                    ->minLength(8)
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state)),
                Hidden::make('role')
                    ->default(function () {
                        $roleId = Role::where('name', 'user')->first()->id ?? 1; // Get the ID of the role
                        return $roleId;
                    }),
            ])
            ->statePath('data')
            ->model(User::class);
    }

    public function create()
    {
        $user = User::create($this->form->getState());
        $roleId = Role::where('name', 'user')->first()->id ?? 1;
        $user->assignRole($roleId);
        session()->flash('status', 'User Created');
        // return redirect()->to('/');
        // Alert::success('Succesfully!', 'User Created');
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.forms.signup');
    }
}
