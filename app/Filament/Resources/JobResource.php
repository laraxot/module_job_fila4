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
use Filament\Forms\Components\DateTimePicker;
use Modules\Job\Filament\Resources\JobResource\Pages\ListJobs;
use Modules\Job\Filament\Resources\JobResource\Pages\CreateJob;
use Modules\Job\Filament\Resources\JobResource\Pages\BoardJobs;
use Modules\Job\Filament\Resources\JobResource\Pages\EditJob;
use Modules\Job\Filament\Resources\JobResource\Widgets\JobStatsOverview;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Modules\Job\Filament\Resources\JobResource\Pages;
use Modules\Job\Filament\Resources\JobResource\Widgets;
use Modules\Job\Models\Job;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    protected static null|string $model = Job::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-circle-stack';

    protected static null|string $recordTitleAttribute = 'display_name';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'queue' => TextInput::make('queue')->required()->maxLength(255),
            'payload' => TextInput::make('payload')->required(),
            'attempts' => TextInput::make('attempts')->numeric()->required(),
            'available_at' => DateTimePicker::make('available_at')->required(),
            'created_at' => DateTimePicker::make('created_at')->required(),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Job::class;
=======
    protected static null|string $model = Job::class;
>>>>>>> b93ef594b4 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-circle-stack';

    protected static null|string $recordTitleAttribute = 'display_name';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'queue' => TextInput::make('queue')->required()->maxLength(255),
            'payload' => TextInput::make('payload')->required(),
            'attempts' => TextInput::make('attempts')->numeric()->required(),
            'available_at' => DateTimePicker::make('available_at')->required(),
            'created_at' => DateTimePicker::make('created_at')->required(),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListJobs::route('/'),
            'create' => CreateJob::route('/create'),
            'board' => BoardJobs::route('/board'),
            'edit' => EditJob::route('/{record}/edit'),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $recordTitleAttribute = 'display_name';

    public static function getFormSchema(): array
    {
        return [
            'queue' => \Filament\Forms\Components\TextInput::make('queue')
                ->required()
                ->maxLength(255),
            'payload' => \Filament\Forms\Components\TextInput::make('payload')
                ->required(),
            'attempts' => \Filament\Forms\Components\TextInput::make('attempts')
                ->numeric()
                ->required(),
            'available_at' => \Filament\Forms\Components\DateTimePicker::make('available_at')
                ->required(),
            'created_at' => \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->required(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'board' => Pages\BoardJobs::route('/board'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }

    public static function getWidgets(): array
    {
        return [
<<<<<<< HEAD
            JobStatsOverview::class,
=======
<<<<<<< HEAD
            JobStatsOverview::class,
=======
            Widgets\JobStatsOverview::class,
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }
}
