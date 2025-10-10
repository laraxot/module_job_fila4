<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Override;
>>>>>>> 7d4742a (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteBulkAction;
use Closure;
use Filament\Tables;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListSchedules extends XotBaseListRecords
{
    protected static string $resource = ScheduleResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> e1b0bf9 (.)
=======
    #[Override]
>>>>>>> 7d4742a (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->searchable(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
            'command' => TextColumn::make('command')->sortable()->searchable(),
            'params' => TextColumn::make('params')->wrap()->searchable(),
            'expression' => TextColumn::make('expression')->sortable()->searchable(),
            'timezone' => TextColumn::make('timezone')->sortable()->searchable(),
            'is_active' => IconColumn::make('is_active')->boolean()->sortable(),
            'without_overlapping' => IconColumn::make('without_overlapping')->boolean()->sortable(),
            'on_one_server' => IconColumn::make('on_one_server')->boolean()->sortable(),
<<<<<<< HEAD
=======
            'command' => TextColumn::make('command')
                ->sortable()
                ->searchable(),
            'params' => TextColumn::make('params')
                ->wrap()
                ->searchable(),
            'expression' => TextColumn::make('expression')
                ->sortable()
                ->searchable(),
            'timezone' => TextColumn::make('timezone')
                ->sortable()
                ->searchable(),
            'is_active' => IconColumn::make('is_active')
                ->boolean()
                ->sortable(),
            'without_overlapping' => IconColumn::make('without_overlapping')
                ->boolean()
                ->sortable(),
            'on_one_server' => IconColumn::make('on_one_server')
                ->boolean()
                ->sortable(),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    public function getListTableActions(): array
    {
        return [
            EditAction::make()
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
                ->hidden(fn($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            RestoreAction::make()->tooltip(__('filament-support::actions/restore.single.label')),
            DeleteAction::make()->tooltip(__('filament-support::actions/delete.single.label')),
            ForceDeleteAction::make()->tooltip(__(
                'filament-support::actions/force-delete.single.label',
            )),
<<<<<<< HEAD
=======
                ->hidden(fn ($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            RestoreAction::make()
                ->tooltip(__('filament-support::actions/restore.single.label')),
            DeleteAction::make()
                ->tooltip(__('filament-support::actions/delete.single.label')),
            ForceDeleteAction::make()
                ->tooltip(__('filament-support::actions/force-delete.single.label')),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            ViewAction::make()
                ->icon('history')
                ->color('gray')
                ->tooltip(static::trans('buttons.history')),
        ];
    }

    public function getListTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function getTableRecordUrlUsing(): null|Closure
    {
        return static fn(): null|string => null;
=======
    protected function getTableRecordUrlUsing(): ?Closure
    {
        return static fn (): ?string => null;
>>>>>>> e1b0bf9 (.)
=======
    protected function getTableRecordUrlUsing(): null|Closure
    {
        return static fn(): null|string => null;
>>>>>>> 7d4742a (.)
    }
}
