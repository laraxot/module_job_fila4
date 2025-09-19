<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
<<<<<<< HEAD
=======
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Filters\BaseFilter;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Job\Filament\Resources\JobResource;
use Modules\Job\Models\Job;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListJobs extends XotBaseListRecords
{
    protected static string $resource = JobResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
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
            'payload' => TextColumn::make('payload')->wrap()->searchable(),
            'attempts' => TextColumn::make('attempts')->numeric()->sortable(),
            'status' => TextColumn::make('status')
                ->badge()
                ->color(fn(string $state): string => match ($state) {
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
            'payload' => TextColumn::make('payload')
                ->wrap()
                ->searchable(),
            'attempts' => TextColumn::make('attempts')
                ->numeric()
                ->sortable(),
            'status' => TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
                    'running' => 'primary',
                    'waiting' => 'warning',
                    default => 'danger',
                }),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
            'reserved_at' => TextColumn::make('reserved_at')->dateTime()->sortable(),
            'available_at' => TextColumn::make('available_at')->dateTime()->sortable(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'payload_view' => ViewColumn::make('payload')->view('job::filament.tables.columns.array'),
<<<<<<< HEAD
=======
            'reserved_at' => TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            'available_at' => TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'payload_view' => ViewColumn::make('payload')
                ->view('job::filament.tables.columns.array'),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
        ];
    }

    /**
     * @return array<string, BaseFilter>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'status' => SelectFilter::make('status')->options([
                'running' => 'Running',
                'waiting' => 'Waiting',
                'failed' => 'Failed',
            ]),
            'queue' => SelectFilter::make('queue')->options(Job::distinct()->pluck('queue', 'queue')->toArray(...)),
<<<<<<< HEAD
=======
    public function getTableFilters(): array
    {
        return [
            'status' => SelectFilter::make('status')
                ->options([
                    'running' => 'Running',
                    'waiting' => 'Waiting',
                    'failed' => 'Failed',
                ]),
            'queue' => SelectFilter::make('queue')
                ->options(fn () => Job::distinct()->pluck('queue', 'queue')->toArray()),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
        ];
    }

    /**
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> e1b0bf9 (.)
=======
    #[Override]
>>>>>>> 7d4742a (.)
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'delete' => DeleteAction::make(),
        ];
    }
}
