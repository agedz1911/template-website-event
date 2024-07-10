<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.dashboard')]

#[Title('Dashboard - Profile')]
class ProfileDashboard extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public ?array $data = [];

    protected User $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function mount(): void
    {
        $this->form->fill($this->user->toArray());
    }

    public function form(Form $form): Form
    {
        $countries = countries();
        return $form
            ->schema([
                TextInput::make('name')->label('First Name')->required(),
                TextInput::make('last_name')->required(),
                Section::make('Biodata')
                    ->schema([
                        Select::make('title')
                            ->options([
                                'Prof' => 'Prof',
                                'MD' => 'MD',
                                'Others' => 'Others',
                            ])->native(false),
                        Select::make('specialization')
                            ->options([
                                'Specialist' => 'Specialist',
                                'Resident' => 'Resident',
                                'General Practition' => 'General Practition',
                                'Nurse' => 'Nurse',
                                'Others' => 'Others',
                            ])->native(false),
                        TextInput::make('institution')
                            ->required()
                            ->placeholder('Institution'),
                        TextInput::make('name_on_certificate')
                            ->required()
                            ->placeholder('John Smith, MD, PhD'),
                        Select::make('country')
                            ->required()
                            ->searchable()
                            ->options(collect($countries)->mapWithKeys(function ($country) {
                                return [$country['name'] => $country['name']];
                            })->all()),
                        TextInput::make('province')
                            ->placeholder('DKI Jakarta'),
                        TextInput::make('state')
                            ->placeholder('West Jakarta'),
                        Textarea::make('address')
                            ->placeholder('jl Gajah Mada')
                            ->rows(4),
                        TextInput::make('postal_code')
                            ->placeholder('10123')
                            ->numeric(),
                        TextInput::make('phone_number')
                            ->required()
                            ->placeholder('+62 xxxxxxxxx')
                            ->tel(),
                    ])
            ])
            ->statePath('data')
            ->model(User::class);
    }

    public function update()
    {
        $this->validate();
        $this->user->update($this->form->getState());
        Notification::make()
            ->title('Successfully Updated Data')
            ->success()
            ->color('success')
            ->send();
        return $this->redirect(ProfileDashboard::class);
    }

    public function table(Table $table): Table
    {
        $countries = countries();
        $query = User::query();

        if ($this->user->hasRole('super_admin') || $this->user->hasRole('admin')) {
            $query = $query;
        } else {
            $query = $query->where('id',  $this->user->id);
        }

        return $table
            // ->query(User::where('id', $this->user->id))
            ->query($query)
            ->columns([
                TextColumn::make('code_participant')->label('Code'),
                TextColumn::make('name')
                    ->label('Full Name')
                    ->description('last_name'),
                TextColumn::make('name_on_certificate'),
                TextColumn::make('email'),
                TextColumn::make('specialization'),
                TextColumn::make('country'),
                TextColumn::make('province'),
                TextColumn::make('phone_number'),
            ])
            ->actions([
                ViewAction::make()
                    ->fillForm(fn (User $record): array => [
                        'name' => $record->name,
                        'email' => $record->email,
                        'country' => $record->country,
                        'last_name' => $record->last_name,
                        'name_on_certificate' => $record->name_on_certificate,
                    ])
                    ->form([
                        TextInput::make('name'),
                        TextInput::make('last_name'),
                        TextInput::make('email'),
                        TextInput::make('country'),
                        TextInput::make('name_on_certificate'),

                    ]),
                Action::make('Change Password')
                    ->color('success')
                    ->label('Change Password')
                    ->form([
                        TextInput::make('password')
                            ->password()
                            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                            ->dehydrated(fn ($state) => filled($state)),
                    ]),
                Action::make('edit')
            ]);
    }

    public function render()
    {
        $user = $this->user;
        return view('livewire.dashboard.profile-dashboard', ['user' => $user]);
    }
}
