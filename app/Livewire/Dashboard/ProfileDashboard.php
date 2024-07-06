<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
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
        return redirect()->back();
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(User::where('id', $this->user->id))
            ->columns([
                TextColumn::make('code_participant')->label('code'),
                TextColumn::make('name')
                ->label('full name')
                    ->description('last_name'),
                TextColumn::make('email'),
                TextColumn::make('country'),
                TextColumn::make('institution'),
                TextColumn::make('phone_number'),
            ])
            ->actions([
                ViewAction::make()
                    ->fillForm(fn (User $record): array => [
                        'name' => $record->name,
                    ])
                    ->form([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        // ...
                    ]),
            ]);
    }

    public function render()
    {
        $user = $this->user;
        return view('livewire.dashboard.profile-dashboard', ['user' => $user]);
    }
}
