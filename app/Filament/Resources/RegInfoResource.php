<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegInfoResource\Pages;
use App\Filament\Resources\RegInfoResource\RelationManagers;
use App\Models\RegInfo;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class RegInfoResource extends Resource
{
    protected static ?string $model = RegInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $modelLabel = 'Registration Information';
    protected static ?string $navigationGroup = 'Front End Components';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->live(onBlur:true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug'),
                Textarea::make('description')->rows(8)
                // MarkdownEditor::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable(),
                TextColumn::make('title'),
                TextColumn::make('description')->limit(75),
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
            'index' => Pages\ListRegInfos::route('/'),
            'create' => Pages\CreateRegInfo::route('/create'),
            'edit' => Pages\EditRegInfo::route('/{record}/edit'),
        ];
    }
}
