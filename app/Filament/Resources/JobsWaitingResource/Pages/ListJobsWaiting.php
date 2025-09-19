<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Override;
>>>>>>> 7d4742a (.)
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Job\Filament\Resources\JobsWaitingResource;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListJobsWaiting extends XotBaseListRecords
{
    public static string $resource = JobsWaitingResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
    

>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
    public function getHeaderWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->searchable()->sortable(),
            'queue' => TextColumn::make('queue')->searchable()->sortable(),
<<<<<<< HEAD
=======
   

    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),
            'queue' => TextColumn::make('queue')
                ->searchable()
                ->sortable(),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            'display_name' => TextColumn::make('display_name')
                ->searchable()
                ->sortable()
                ->wrap(),
            'status' => TextColumn::make('status')
                ->badge()
                ->sortable()
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
                ->color(static fn(string $state): string => match ($state) {
                    'running' => 'primary',
                    'waiting' => 'success',
                    'failed' => 'danger',
                    default => 'secondary',
                }),
            'attempts' => TextColumn::make('attempts')->numeric()->sortable(),
            'available_at' => TextColumn::make('available_at')->dateTime()->sortable(),
            'reserved_at' => TextColumn::make('reserved_at')->dateTime()->sortable(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
<<<<<<< HEAD
=======
                ->color(
                    static fn (string $state): string => match ($state) {
                        'running' => 'primary',
                        'waiting' => 'success',
                        'failed' => 'danger',
                        default => 'secondary',
                    }
                ),
            'attempts' => TextColumn::make('attempts')
                ->numeric()
                ->sortable(),
            'available_at' => TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
            'reserved_at' => TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
        ];
    }
}
