<?php

namespace App\Livewire\Resources;

use App\Models\WelcomeMessage as ModelsWelcomeMessage;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WelcomeMessage extends Component 
{


    public function render()
    {

        $messages = ModelsWelcomeMessage::all();
        return view('livewire.resources.welcome-message', ['messages' => $messages]);
    }
}
