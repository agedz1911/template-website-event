<?php

namespace App\Filament\Resources\AtGlanceResource\Pages;

use App\Filament\Resources\AtGlanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAtGlance extends EditRecord
{
    protected static string $resource = AtGlanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
