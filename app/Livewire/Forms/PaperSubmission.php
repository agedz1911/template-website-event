<?php

namespace App\Livewire\Forms;

use App\Models\FreePaper;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PaperSubmission extends Component implements HasForms, HasTable
{
    use WithFileUploads, InteractsWithForms, InteractsWithTable;

    public $user;
    public ?array $data = [];

    public function mount()
    {
        $this->user = auth()->user();
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('free_paper_code')->hidden(),
                Select::make('article_type')
                    ->required()
                    ->options([
                        "Case Report" => 'Case Report',
                        "Basic Research" => 'Basic Research',
                        "Clinical Research" => 'Clinical Research',
                        "Meta Analysis" => 'Meta Analysis',
                        "Systematic Review" => 'Systematic Review'
                    ]),
                Select::make('presentation_format')
                    ->required()
                    ->options([
                        "Oral Presentation" => "Oral Presentation",
                        "Moderated Poster" => "Moderated Poster",
                        "Unmoderated Poster" => 'Unmoderated Poster',
                    ]),
                Textarea::make('abstract_title')->rows(4)->required(),
                FileUpload::make('file')
                    ->required()
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->replace(' ', '-') // replace spaces with dashes
                            ->prepend('wecoc-'),
                    )
                    ->directory('abstract')
                    ->maxSize(1024)
                    ->acceptedFileTypes(['application/pdf', 'application/msword'])
            ])
            ->statePath('data')
            ->model(FreePaper::class);
    }

    private function getNextCode(): string
    {
        $lastCode = FreePaper::latest()->first()->free_paper_code ?? 'A-0000';
        $nextCode = $this->incrementCode($lastCode);
        return $nextCode;
    }

    private function incrementCode(string $code): string
    {
        $parts = explode('-', $code);
        $number = (int) $parts[1];
        $number++;
        $newCode = 'A-' . str_pad($number, 4, '0', STR_PAD_LEFT);
        return $newCode;
    }

    public function create()
    {
        $code = $this->getNextCode();
        $paperData = $this->form->getState();
        $paperData['free_paper_code'] = $code;
        $paperData['user_id'] = auth()->id();
        // dd($paperData);
        FreePaper::create($paperData);
        Notification::make()
            ->title('Successfully submitted')
            ->success()
            ->color('success')
            ->send();
        $this->form->fill();
        return redirect()->back();
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(FreePaper::where('user_id', $this->user->id))
            ->columns([
                TextColumn::make('free_paper_code')->label('Abstract Code'),
                TextColumn::make('user.name')->label('Author')
                    ->description(fn (FreePaper $record): string => $record->user['last_name']),
                TextColumn::make('user.country')->label('Country'),
                TextColumn::make('article_type'),
                TextColumn::make('abstract_title'),

            ]);
    }

    public function render()
    {
        return view('livewire.forms.paper-submission', ['user' => $this->user]);
    }
}
