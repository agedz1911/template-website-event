<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\ActionGroup;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Filament Shield';

    public static function form(Form $form): Form
    {
        $countries = countries();
        return $form
            ->schema([
                TextInput::make('name')->required()->label('First Name'),
                TextInput::make('last_name')->required(),
                TextInput::make('email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    // ->unique(table: User::class)
                    ->required(),
                TextInput::make('password')
                    ->required(fn (Page $livewire) => ($livewire instanceof CreateRecord))
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state)),
                Hidden::make('code_participant')
                    ->dehydrateStateUsing(function () {
                        $lastCode = User::latest('code_participant')->first()->code_participant ?? 'R-0000';
                        return (new UserResource())->incrementCode($lastCode);
                    }),
                Select::make('role')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload(),
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
                        TextInput::make('institution'),
                        TextInput::make('name_on_certificate'),
                        Select::make('country')
                            ->searchable()
                            ->options(collect($countries)->mapWithKeys(function ($country) {
                                return [$country['name'] => $country['name']];
                            })->all()),
                        TextInput::make('province'),
                        TextInput::make('state'),
                        Textarea::make('address')->rows(4),
                        TextInput::make('postal_code')->numeric(),
                        TextInput::make('phone_number')->tel(),
                    ])

            ]);
    }

    private function incrementCode(string $code): string
    {
        $parts = explode('-', $code);
        $number = (int) $parts[1];
        $number++;
        $newCode = 'R-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        return $newCode;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code_participant')->label('Code')
                    ->sortable(),
                TextColumn::make('name')->label('First Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')
                   ,
                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone_number'),
                TextColumn::make('institution'),
                TextColumn::make('specialization'),
                TextColumn::make('country')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('roles.name'),
                // TextColumn::make('created_at')->date()->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
