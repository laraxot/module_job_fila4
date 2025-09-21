<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteBulkAction;
use Closure;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Tables;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListSchedules extends XotBaseListRecords
{
    protected static string $resource = ScheduleResource::class;

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->searchable(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
            'command' => TextColumn::make('command')->sortable()->searchable(),
            'params' => TextColumn::make('params')->wrap()->searchable(),
            'expression' => TextColumn::make('expression')->sortable()->searchable(),
            'timezone' => TextColumn::make('timezone')->sortable()->searchable(),
            'is_active' => IconColumn::make('is_active')->boolean()->sortable(),
            'without_overlapping' => IconColumn::make('without_overlapping')->boolean()->sortable(),
            'on_one_server' => IconColumn::make('on_one_server')->boolean()->sortable(),
<<<<<<< HEAD
=======
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
<<<<<<< HEAD
=======
=======
    public function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'command' => Tables\Columns\TextColumn::make('command')
                ->sortable()
                ->searchable(),
            'params' => Tables\Columns\TextColumn::make('params')
                ->wrap()
                ->searchable(),
            'expression' => Tables\Columns\TextColumn::make('expression')
                ->sortable()
                ->searchable(),
            'timezone' => Tables\Columns\TextColumn::make('timezone')
                ->sortable()
                ->searchable(),
            'is_active' => Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->sortable(),
            'without_overlapping' => Tables\Columns\IconColumn::make('without_overlapping')
                ->boolean()
                ->sortable(),
            'on_one_server' => Tables\Columns\IconColumn::make('on_one_server')
                ->boolean()
                ->sortable(),
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => Tables\Columns\TextColumn::make('updated_at')
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    public function getListTableActions(): array
    {
        return [
<<<<<<< HEAD
            EditAction::make()
=======
<<<<<<< HEAD
            EditAction::make()
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
                ->hidden(fn($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            RestoreAction::make()->tooltip(__('filament-support::actions/restore.single.label')),
            DeleteAction::make()->tooltip(__('filament-support::actions/delete.single.label')),
            ForceDeleteAction::make()->tooltip(__(
                'filament-support::actions/force-delete.single.label',
            )),
<<<<<<< HEAD
            ViewAction::make()
=======
=======
                ->hidden(fn ($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            RestoreAction::make()
                ->tooltip(__('filament-support::actions/restore.single.label')),
            DeleteAction::make()
                ->tooltip(__('filament-support::actions/delete.single.label')),
            ForceDeleteAction::make()
                ->tooltip(__('filament-support::actions/force-delete.single.label')),
>>>>>>> a12f125f4a (.)
=======
                ->hidden(fn($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            RestoreAction::make()->tooltip(__('filament-support::actions/restore.single.label')),
            DeleteAction::make()->tooltip(__('filament-support::actions/delete.single.label')),
            ForceDeleteAction::make()->tooltip(__(
                'filament-support::actions/force-delete.single.label',
            )),
>>>>>>> b93ef594b4 (.)
            ViewAction::make()
=======
            Tables\Actions\EditAction::make()
                ->hidden(fn ($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            Tables\Actions\RestoreAction::make()
                ->tooltip(__('filament-support::actions/restore.single.label')),
            Tables\Actions\DeleteAction::make()
                ->tooltip(__('filament-support::actions/delete.single.label')),
            Tables\Actions\ForceDeleteAction::make()
                ->tooltip(__('filament-support::actions/force-delete.single.label')),
            Tables\Actions\ViewAction::make()
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                ->icon('history')
                ->color('gray')
                ->tooltip(static::trans('buttons.history')),
        ];
    }

    public function getListTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            DeleteBulkAction::make(),
        ];
    }

<<<<<<< HEAD
    protected function getTableRecordUrlUsing(): null|Closure
    {
        return static fn(): null|string => null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getTableRecordUrlUsing(): null|Closure
    {
        return static fn(): null|string => null;
=======
    protected function getTableRecordUrlUsing(): ?Closure
    {
        return static fn (): ?string => null;
>>>>>>> a12f125f4a (.)
=======
    protected function getTableRecordUrlUsing(): null|Closure
    {
        return static fn(): null|string => null;
>>>>>>> b93ef594b4 (.)
=======
            Tables\Actions\DeleteBulkAction::make(),
        ];
    }

    protected function getTableRecordUrlUsing(): ?\Closure
    {
        return static fn (): ?string => null;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
