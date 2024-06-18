<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultyResource\Pages;
use App\Filament\Resources\FacultyResource\RelationManagers;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;
    // protected static ?string $modelLabel = 'Type';
    protected static ?string $navigationGroup = 'Front End Components';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        $countries = countries();

        return $form
            ->schema([
                TextInput::make('name')->label('Full Name')->required(),
                Select::make('country')
                    ->required()
                    ->searchable()
                    ->options(collect($countries)->mapWithKeys(function ($country) {
                        return [$country['name'] => $country['name']];
                    })->all()),
                // FileUpload::make('image'),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('images'),
                TextInput::make('email'),
                TextInput::make('instagram')
                    ->prefix('https://')
                    ->suffix('.com'),
                TextInput::make('linkedin')->prefix('https://')
                    ->suffix('.com'),
                TextInput::make('twitter')->prefix('https://')
                    ->suffix('.com'),
                Toggle::make('is_active')->required(),
                Select::make('type_participants')
                    ->multiple()
                    ->required()
                    ->relationship('type_participants', 'name')
                    ->searchable()
                    ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('country'),
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('images'),
                IconColumn::make('is_active')->boolean()->sortable(),
                TextColumn::make('type_participants.name')->label('Participated')
            ])
            ->filters([
                // Filter::make('type_participant.name')
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),

                ])
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
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }
}
