<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Modules\Job\Filament\Resources\ImportResource\Pages;
use Modules\Job\Models\Import;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ImportResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    protected static null|string $model = Import::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
            'file' => FileUpload::make('file')
                ->required()
                ->acceptedFileTypes([
                    'text/csv',
                    'application/vnd.ms-excel',
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                ])
<<<<<<< HEAD
                ->maxSize(10240),
            'status' => Select::make('status')
=======
=======
    protected static ?string $model = Import::class;
=======
    protected static null|string $model = Import::class;
>>>>>>> b93ef594b4 (.)

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
            'file' => FileUpload::make('file')
                ->required()
<<<<<<< HEAD
                ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])
>>>>>>> a12f125f4a (.)
=======
                ->acceptedFileTypes([
                    'text/csv',
                    'application/vnd.ms-excel',
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                ])
>>>>>>> b93ef594b4 (.)
                ->maxSize(10240),
            'status' => Select::make('status')
=======
    protected static ?string $model = Import::class;

    public static function getFormSchema(): array
    {
        return [
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'file' => \Filament\Forms\Components\FileUpload::make('file')
                ->required()
                ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])
                ->maxSize(10240),
            'status' => \Filament\Forms\Components\Select::make('status')
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                ->required()
                ->options([
                    'pending' => 'Pending',
                    'processing' => 'Processing',
                    'completed' => 'Completed',
                    'failed' => 'Failed',
                ])
                ->default('pending'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            'error_message' => Textarea::make('error_message')->maxLength(65535),
            'total_rows' => TextInput::make('total_rows')->numeric(),
            'processed_rows' => TextInput::make('processed_rows')->numeric(),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
<<<<<<< HEAD
=======
=======
            'error_message' => Textarea::make('error_message')
                ->maxLength(65535),
            'total_rows' => TextInput::make('total_rows')
                ->numeric(),
            'processed_rows' => TextInput::make('processed_rows')
                ->numeric(),
=======
            'error_message' => Textarea::make('error_message')->maxLength(65535),
            'total_rows' => TextInput::make('total_rows')->numeric(),
            'processed_rows' => TextInput::make('processed_rows')->numeric(),
>>>>>>> b93ef594b4 (.)
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
<<<<<<< HEAD
        return [
        ];
>>>>>>> a12f125f4a (.)
=======
        return [];
>>>>>>> b93ef594b4 (.)
=======
            'error_message' => \Filament\Forms\Components\Textarea::make('error_message')
                ->maxLength(65535),
            'total_rows' => \Filament\Forms\Components\TextInput::make('total_rows')
                ->numeric(),
            'processed_rows' => \Filament\Forms\Components\TextInput::make('processed_rows')
                ->numeric(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
