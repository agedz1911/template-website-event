<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScientificScheduleResource\Pages;
use App\Filament\Resources\ScientificScheduleResource\RelationManagers;
use App\Models\ScientificSchedule;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScientificScheduleResource extends Resource
{
    protected static ?string $model = ScientificSchedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';
    protected static ?string $modelLabel = 'Schedules';
    protected static ?string $navigationGroup = 'Scientific Schedules';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('session_id')
                    ->relationship('session', 'session')
                    ->searchable()
                    ->preload(),
                TimePicker::make('timeStart'),
                TimePicker::make('timeEnd'),
                TextInput::make('topic'),
                Select::make('faculty_id')
                    ->relationship('faculty', 'name')
                    ->searchable()
                    ->preload(),
                Toggle::make('is_published'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->label('No')
                    ->rowIndex(),
                TextColumn::make('faculty.name')->searchable(),
                TextColumn::make('faculty.country')->searchable(),
                TextColumn::make('topic')->listWithLineBreaks()->bulleted(),
                TextColumn::make('session.session')->searchable(),
                TextColumn::make('session.date')->dateTime('d F Y')->sortable()->label('Date'),
                TextColumn::make('timeStart'),
                IconColumn::make('is_published')->boolean()->sortable(),
                // TextColumn::make('faculty.type_participants.name')->searchable(),
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
            'index' => Pages\ListScientificSchedules::route('/'),
            'create' => Pages\CreateScientificSchedule::route('/create'),
            'edit' => Pages\EditScientificSchedule::route('/{record}/edit'),
        ];
    }
}
