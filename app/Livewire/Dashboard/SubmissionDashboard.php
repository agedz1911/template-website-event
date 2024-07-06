<?php

namespace App\Livewire\Dashboard;

use App\Models\FreePaper;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\ViewAction;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

#[Layout('components.layouts.dashboard')]

#[Title('Dashboard - Submissions')]
class SubmissionDashboard extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;

    public $user;
    public ?array $data = [];

    public function mount()
    {
        $this->user = auth()->user();
        $this->form->fill();
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(FreePaper::where('user_id', $this->user->id))
            ->columns([
                TextColumn::make('free_paper_code')->label('Abstract Code')->sortable(),
                TextColumn::make('user.name')->label('Author')
                    ->description(fn (FreePaper $record): string => $record->user['last_name']),
                TextColumn::make('user.country')->label('Country'),
                TextColumn::make('abstract_title')->searchable(),
                TextColumn::make('presentation_format'),
                TextColumn::make('article_type')->sortable()->searchable(),
                TextColumn::make('file')
                    ->url(fn (FreePaper $record) => asset("storage/{$record->file}"))
                    ->openUrlInNewTab()
                    ->limit(20)
            ])
            ->actions([
                ViewAction::make()
                    ->fillForm(fn (FreePaper $record): array => [
                        'file' => $record->file,
                    ])
                    ->form([
                        TextInput::make('file')
                            ->required()
                            ->maxLength(255),
                        // ...
                    ]),
                ActionGroup::make([

                    Action::make('edit')
                        ->color('success')
                        ->fillForm(fn (FreePaper $record): array => [
                            'article_type' => $record->article_type,
                            'abstract_title' => $record->abstract_title,
                            'presentation_format' => $record->presentation_format,
                            'file' => $record->file,
                        ])
                        ->form([
                            Select::make('article_type')
                                ->options([
                                    "Case Report" => 'Case Report',
                                    "Basic Research" => 'Basic Research',
                                    "Clinical Research" => 'Clinical Research',
                                    "Meta Analysis" => 'Meta Analysis',
                                    "Systematic Review" => 'Systematic Review'
                                ]),
                            Select::make('presentation_format')
                                ->options([
                                    "Oral Presentation" => "Oral Presentation",
                                    "Moderated Poster" => "Moderated Poster",
                                    "Unmoderated Poster" => 'Unmoderated Poster',
                                ]),
                            Textarea::make('abstract_title')->rows(4),
                            FileUpload::make('file')
                                ->getUploadedFileNameForStorageUsing(
                                    fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                        ->replace(' ', '-') // replace spaces with dashes
                                        ->prepend('wecoc-'),
                                )
                                ->directory('abstract')
                                ->maxSize(2048)
                                ->acceptedFileTypes(['application/pdf', 'application/msword'])
                        ])
                        ->action(function (array $data, FreePaper $record): void {
                            $record->abstract_title = $data['abstract_title'];
                            $record->presentation_format = $data['presentation_format'];
                            $record->article_type = $data['article_type'];
                            $record->file = $data['file'];
                            $record->save();
                            Notification::make()
                                ->title('Successfully updated')
                                ->success()
                                ->color('success')
                                ->send();
                        }),
                    Action::make('delete')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->action(fn (FreePaper $record) => $record->delete())
                ])
            ]);
    }

    public function render()
    {
        return view('livewire.dashboard.submission-dashboard');
    }
}
