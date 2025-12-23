<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
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
>>>>>>> laraxot/develop
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
use Modules\Job\Filament\Resources\ExportResource\Pages;
use Modules\Job\Models\Export;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ExportResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    protected static null|string $model = Export::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'name' => TextInput::make('name')->required()->maxLength(255),
<<<<<<< HEAD
            'type' => Select::make('type')
=======
<<<<<<< HEAD
            'type' => Select::make('type')
=======
=======
    protected static ?string $model = Export::class;
=======
    protected static null|string $model = Export::class;
>>>>>>> b93ef594b4 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
>>>>>>> a12f125f4a (.)
=======
            'name' => TextInput::make('name')->required()->maxLength(255),
>>>>>>> b93ef594b4 (.)
            'type' => Select::make('type')
=======
    protected static ?string $model = Export::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'type' => \Filament\Forms\Components\Select::make('type')
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
                ->required()
                ->options([
                    'csv' => 'CSV',
                    'excel' => 'Excel',
                    'pdf' => 'PDF',
                ])
                ->default('csv'),
<<<<<<< HEAD
            'status' => Select::make('status')
=======
<<<<<<< HEAD
            'status' => Select::make('status')
=======
<<<<<<< HEAD
            'status' => Select::make('status')
=======
            'status' => \Filament\Forms\Components\Select::make('status')
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
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
>>>>>>> laraxot/develop
            'error_message' => Textarea::make('error_message')
                ->maxLength(65535)
                ->columnSpanFull(),
            'created_at' => DateTimePicker::make('created_at')->disabled(),
            'updated_at' => DateTimePicker::make('updated_at')->disabled(),
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
            'created_at' => DateTimePicker::make('created_at')->disabled(),
            'updated_at' => DateTimePicker::make('updated_at')->disabled(),
>>>>>>> b93ef594b4 (.)
=======
            'error_message' => \Filament\Forms\Components\Textarea::make('error_message')
                ->maxLength(65535)
                ->columnSpanFull(),
            'created_at' => \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->disabled(),
            'updated_at' => \Filament\Forms\Components\DateTimePicker::make('updated_at')
                ->disabled(),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        ];
    }
}
