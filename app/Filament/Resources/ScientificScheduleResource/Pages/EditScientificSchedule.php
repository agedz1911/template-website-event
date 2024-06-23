<?php

namespace App\Filament\Resources\ScientificScheduleResource\Pages;

use App\Filament\Resources\ScientificScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScientificSchedule extends EditRecord
{
    protected static string $resource = ScientificScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
