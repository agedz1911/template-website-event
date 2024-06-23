<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SessionSecheduleResource\Pages;
use App\Filament\Resources\SessionSecheduleResource\RelationManagers;
use App\Models\ScheduleSession;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SessionSecheduleResource extends Resource
{
    protected static ?string $model = ScheduleSession::class;
    protected static ?string $modelLabel = 'Sessions';
    protected static ?string $navigationGroup = 'Scientific Schedules';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('session'),
                DatePicker::make('date')
                    ->native(false)
                    ->displayFormat('d F Y'),
                TimePicker::make('timeStart'),
                TimePicker::make('timeEnd'),
                TextInput::make('room'),
                Toggle::make('is_published'),
                Select::make('moderator_id')
                    ->relationship('moderator', 'name')
                    ->searchable()
                    ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->rowIndex()->label('No')->sortable(),
                TextColumn::make('session')->searchable(),
                TextColumn::make('date')->dateTime('d F Y'),
                TextColumn::make('timeStart')->sortable(),
                TextColumn::make('moderator.name')->searchable(),
                TextColumn::make('room')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSessionSechedules::route('/'),
            'create' => Pages\CreateSessionSechedule::route('/create'),
            'edit' => Pages\EditSessionSechedule::route('/{record}/edit'),
        ];
    }
}
