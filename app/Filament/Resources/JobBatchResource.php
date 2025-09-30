<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/JobBatchesResource.php?ref_type=heads
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
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Modules\Job\Filament\Resources\JobBatchResource\Pages\ListJobBatches;
use Modules\Job\Models\JobBatch;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobBatchResource extends XotBaseResource
{
    // //

    // protected static ?string $model = JobBatch::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')->required()->maxLength(255),
            'name' => TextInput::make('name')->required()->maxLength(255),
            'total_jobs' => TextInput::make('total_jobs')->numeric()->required(),
            'pending_jobs' => TextInput::make('pending_jobs')->numeric()->required(),
            'failed_jobs' => TextInput::make('failed_jobs')->numeric()->required(),
            'failed' => Toggle::make('failed')->required(),
            'options' => Textarea::make('options')->maxLength(65535),
            'created_at' => DateTimePicker::make('created_at')->required(),
<<<<<<< HEAD
=======
=======
    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')
                ->required()
                ->maxLength(255),
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255),
            'total_jobs' => TextInput::make('total_jobs')
                ->numeric()
                ->required(),
            'pending_jobs' => TextInput::make('pending_jobs')
                ->numeric()
                ->required(),
            'failed_jobs' => TextInput::make('failed_jobs')
                ->numeric()
                ->required(),
            'failed' => Toggle::make('failed')
                ->required(),
            'options' => Textarea::make('options')
                ->maxLength(65535),
            'created_at' => DateTimePicker::make('created_at')
                ->required(),
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')->required()->maxLength(255),
            'name' => TextInput::make('name')->required()->maxLength(255),
            'total_jobs' => TextInput::make('total_jobs')->numeric()->required(),
            'pending_jobs' => TextInput::make('pending_jobs')->numeric()->required(),
            'failed_jobs' => TextInput::make('failed_jobs')->numeric()->required(),
            'failed' => Toggle::make('failed')->required(),
            'options' => Textarea::make('options')->maxLength(65535),
            'created_at' => DateTimePicker::make('created_at')->required(),
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
            'cancelled_at' => DateTimePicker::make('cancelled_at'),
            'finished_at' => DateTimePicker::make('finished_at'),
        ];
    }

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
    public static function getFormSchema(): array
    {
        return [
            'id' => \Filament\Forms\Components\TextInput::make('id')
                ->required()
                ->maxLength(255),
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'total_jobs' => \Filament\Forms\Components\TextInput::make('total_jobs')
                ->numeric()
                ->required(),
            'pending_jobs' => \Filament\Forms\Components\TextInput::make('pending_jobs')
                ->numeric()
                ->required(),
            'failed_jobs' => \Filament\Forms\Components\TextInput::make('failed_jobs')
                ->numeric()
                ->required(),
            'failed' => \Filament\Forms\Components\Toggle::make('failed')
                ->required(),
            'options' => \Filament\Forms\Components\Textarea::make('options')
                ->maxLength(65535),
            'created_at' => \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->required(),
            'cancelled_at' => \Filament\Forms\Components\DateTimePicker::make('cancelled_at'),
            'finished_at' => \Filament\Forms\Components\DateTimePicker::make('finished_at'),
        ];
    }

>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListJobBatches::route('/'),
        ];
    }
}
