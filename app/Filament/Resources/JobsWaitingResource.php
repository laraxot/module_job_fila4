<?php

/**
 * @see https://github.com/mooxphp/jobs/blob/main/src/resources/JobsWaitingResource.php
 */

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
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Forms;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Job\Models\Job;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobsWaitingResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    protected static null|string $model = Job::class;

    protected static bool $shouldRegisterNavigation = true;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'job_id' => TextInput::make('job_id')->required()->maxLength(255),
            'name' => TextInput::make('name')->maxLength(255),
            'queue' => TextInput::make('queue')->maxLength(255),
            'started_at' => DateTimePicker::make('started_at'),
            'finished_at' => DateTimePicker::make('finished_at'),
            'failed' => Toggle::make('failed')->required(),
            'attempt' => TextInput::make('attempt')->required(),
            'exception_message' => Textarea::make('exception_message')->maxLength(65535),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Job::class;
=======
    protected static null|string $model = Job::class;
>>>>>>> b93ef594b4 (.)

    protected static bool $shouldRegisterNavigation = true;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'job_id' => TextInput::make('job_id')->required()->maxLength(255),
            'name' => TextInput::make('name')->maxLength(255),
            'queue' => TextInput::make('queue')->maxLength(255),
            'started_at' => DateTimePicker::make('started_at'),
            'finished_at' => DateTimePicker::make('finished_at'),
<<<<<<< HEAD
            'failed' => Toggle::make('failed')
                ->required(),
            'attempt' => TextInput::make('attempt')
                ->required(),
            'exception_message' => Textarea::make('exception_message')
                ->maxLength(65535),
>>>>>>> a12f125f4a (.)
=======
            'failed' => Toggle::make('failed')->required(),
            'attempt' => TextInput::make('attempt')->required(),
            'exception_message' => Textarea::make('exception_message')->maxLength(65535),
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $model = Job::class;

    protected static bool $shouldRegisterNavigation = true;

    public static function getFormSchema(): array
    {
        return [
            'job_id' => Forms\Components\TextInput::make('job_id')
                ->required()
                ->maxLength(255),
            'name' => Forms\Components\TextInput::make('name')
                ->maxLength(255),
            'queue' => Forms\Components\TextInput::make('queue')
                ->maxLength(255),
            'started_at' => Forms\Components\DateTimePicker::make('started_at'),
            'finished_at' => Forms\Components\DateTimePicker::make('finished_at'),
            'failed' => Forms\Components\Toggle::make('failed')
                ->required(),
            'attempt' => Forms\Components\TextInput::make('attempt')
                ->required(),
            'exception_message' => Forms\Components\Textarea::make('exception_message')
                ->maxLength(65535),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }

    public static function getWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }
}
