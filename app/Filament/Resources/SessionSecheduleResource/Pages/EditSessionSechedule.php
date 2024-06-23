<?php

namespace App\Filament\Resources\SessionSecheduleResource\Pages;

use App\Filament\Resources\SessionSecheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSessionSechedule extends EditRecord
{
    protected static string $resource = SessionSecheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
