<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/FailedJobsResource.php
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

<<<<<<< HEAD
use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Modules\Job\Filament\Resources\FailedJobResource\Pages\ListFailedJobs;
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
use Modules\Job\Filament\Resources\FailedJobResource\Pages\ListFailedJobs;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Forms;
use Modules\Job\Filament\Resources\FailedJobResource\Pages;
use Modules\Job\Models\FailedJob;
use Modules\Xot\Filament\Resources\XotBaseResource;

class FailedJobResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    protected static null|string $model = FailedJob::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'uuid' => TextInput::make('uuid')->disabled()->columnSpan(4),
            'failed_at' => TextInput::make('failed_at')->disabled(),
            'id' => TextInput::make('id')->disabled(),
            'connection' => TextInput::make('connection')->disabled(),
            'queue' => TextInput::make('queue')->disabled(),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = FailedJob::class;
=======
    protected static null|string $model = FailedJob::class;
>>>>>>> b93ef594b4 (.)

    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'uuid' => TextInput::make('uuid')
                ->disabled()
                ->columnSpan(4),
            'failed_at' => TextInput::make('failed_at')
                ->disabled(),
            'id' => TextInput::make('id')
                ->disabled(),
            'connection' => TextInput::make('connection')
                ->disabled(),
            'queue' => TextInput::make('queue')
                ->disabled(),
>>>>>>> a12f125f4a (.)
=======
            'uuid' => TextInput::make('uuid')->disabled()->columnSpan(4),
            'failed_at' => TextInput::make('failed_at')->disabled(),
            'id' => TextInput::make('id')->disabled(),
            'connection' => TextInput::make('connection')->disabled(),
            'queue' => TextInput::make('queue')->disabled(),
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
            'exception' => Textarea::make('exception')
                ->disabled()
                ->columnSpan(4)
                ->extraInputAttributes(['style' => 'font-size: 80%;']),
            'payload' => Textarea::make('payload')
<<<<<<< HEAD
=======
=======
    protected static ?string $model = FailedJob::class;

    public static function getFormSchema(): array
    {
        return [
            'uuid' => Forms\Components\TextInput::make('uuid')
                ->disabled()
                ->columnSpan(4),
            'failed_at' => Forms\Components\TextInput::make('failed_at')
                ->disabled(),
            'id' => Forms\Components\TextInput::make('id')
                ->disabled(),
            'connection' => Forms\Components\TextInput::make('connection')
                ->disabled(),
            'queue' => Forms\Components\TextInput::make('queue')
                ->disabled(),
            'exception' => Forms\Components\Textarea::make('exception')
                ->disabled()
                ->columnSpan(4)
                ->extraInputAttributes(['style' => 'font-size: 80%;']),
            'payload' => Forms\Components\Textarea::make('payload')
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                ->disabled()
                ->columnSpan(4)
                ->extraInputAttributes(['style' => 'font-size: 80%;']),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
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
            'index' => ListFailedJobs::route('/'),
<<<<<<< HEAD
=======
=======
    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFailedJobs::route('/'),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }
}
