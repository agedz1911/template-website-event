<?php

namespace App\Filament\Resources\TypeParticipantResource\Pages;

use App\Filament\Resources\TypeParticipantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeParticipants extends ListRecords
{
    protected static string $resource = TypeParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
