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
                TextInput::make('name')
                    ->label('First Name')
                    ->placeholder('John')
                    ->required(),
                TextInput::make('last_name')
                    ->required()
                    ->placeholder('Doe'),
                TextInput::make('email')
                    ->required()
                    ->placeholder('John@example.com')
                    ->unique(),
                TextInput::make('password')
                    ->required()
                    ->placeholder('********')
                    ->password()
                    ->minLength(8)
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state)),
                Hidden::make('code_participant')
                    ->dehydrateStateUsing(fn ($state) => $this->getNextCode())
                    ->dehydrated(fn ($state) => $state),
                Hidden::make('role')
                    ->default(function () {
                        $roleId = Role::where('name', 'user')->first()->id ?? 1; // Get the ID of the role
                        return $roleId;
                    }),
            ])
            ->statePath('data')
            ->model(User::class);
    }

    private function getNextCode(): string
    {
        $lastCode = User::latest()->first()->code_participant ?? 'R-0000';
        $nextCode = $this->incrementCode($lastCode);
        return $nextCode;
    }
    private function incrementCode(string $code): string
    {
        $parts = explode('-', $code);
        $number = (int) $parts[1];
        $number++;
        $newCode = 'R-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        return $newCode;
    }

    public function create()
    {
        $code = $this->getNextCode();
        $userData = $this->form->getState();
        $userData['code_participant'] = $code;
        $user = User::create($userData);
        $roleId = Role::where('name', 'user')->first()->id ?? 1;
        $user->assignRole($roleId);
        // Notification::make()
        //     ->title('User created')
        //     ->success()
        //     ->color('success')
        //     ->send();
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.forms.signup');
    }
}
