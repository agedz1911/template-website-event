<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AtGlanceResource\Pages;
use App\Filament\Resources\AtGlanceResource\RelationManagers;
use App\Models\AtGlance;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AtGlanceResource extends Resource
{
    protected static ?string $model = AtGlance::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $modelLabel = 'Program at Glance';
    protected static ?string $navigationGroup = 'Front End Components';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('file_at_glances')
                    ->collection('at_glances'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                SpatieMediaLibraryImageColumn::make('file_at_glances')
                    ->collection('at_glances'),
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
            'index' => Pages\ListAtGlances::route('/'),
            'create' => Pages\CreateAtGlance::route('/create'),
            'edit' => Pages\EditAtGlance::route('/{record}/edit'),
        ];
    }
}
