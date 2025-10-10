<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Override;
>>>>>>> 7d4742a (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Modules\Job\Filament\Resources\ExportResource\Pages;
use Modules\Job\Models\Export;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ExportResource extends XotBaseResource
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
    protected static null|string $model = Export::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
<<<<<<< HEAD
=======
    protected static ?string $model = Export::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            'type' => Select::make('type')
                ->required()
                ->options([
                    'csv' => 'CSV',
                    'excel' => 'Excel',
                    'pdf' => 'PDF',
                ])
                ->default('csv'),
            'status' => Select::make('status')
                ->required()
                ->options([
                    'pending' => 'Pending',
                    'processing' => 'Processing',
                    'completed' => 'Completed',
                    'failed' => 'Failed',
                ])
                ->default('pending'),
            'error_message' => Textarea::make('error_message')
                ->maxLength(65535)
                ->columnSpanFull(),
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => DateTimePicker::make('created_at')->disabled(),
            'updated_at' => DateTimePicker::make('updated_at')->disabled(),
=======
            'created_at' => DateTimePicker::make('created_at')
                ->disabled(),
            'updated_at' => DateTimePicker::make('updated_at')
                ->disabled(),
>>>>>>> e1b0bf9 (.)
=======
            'created_at' => DateTimePicker::make('created_at')->disabled(),
            'updated_at' => DateTimePicker::make('updated_at')->disabled(),
>>>>>>> 7d4742a (.)
        ];
    }
}
