<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

<<<<<<< HEAD
use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Forms;
use Modules\Job\Filament\Resources\FailedImportRowResource\Pages;
use Modules\Job\Models\FailedImportRow;
use Modules\Xot\Filament\Resources\XotBaseResource;

class FailedImportRowResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    protected static null|string $model = FailedImportRow::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'import_class' => TextInput::make('import_class')->required()->maxLength(255),
            'row_number' => TextInput::make('row_number')->numeric()->required(),
            'row_data' => Textarea::make('row_data')->required()->columnSpanFull(),
            'error_message' => Textarea::make('error_message')->required()->columnSpanFull(),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
<<<<<<< HEAD
=======
=======
    protected static ?string $model = FailedImportRow::class;
=======
    protected static null|string $model = FailedImportRow::class;
>>>>>>> b93ef594b4 (.)

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'import_class' => TextInput::make('import_class')->required()->maxLength(255),
            'row_number' => TextInput::make('row_number')->numeric()->required(),
            'row_data' => Textarea::make('row_data')->required()->columnSpanFull(),
            'error_message' => Textarea::make('error_message')->required()->columnSpanFull(),
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
    protected static ?string $model = FailedImportRow::class;

    public static function getFormSchema(): array
    {
        return [
            'import_class' => Forms\Components\TextInput::make('import_class')
                ->required()
                ->maxLength(255),
            'row_number' => Forms\Components\TextInput::make('row_number')
                ->numeric()
                ->required(),
            'row_data' => Forms\Components\Textarea::make('row_data')
                ->required()
                ->columnSpanFull(),
            'error_message' => Forms\Components\Textarea::make('error_message')
                ->required()
                ->columnSpanFull(),
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
