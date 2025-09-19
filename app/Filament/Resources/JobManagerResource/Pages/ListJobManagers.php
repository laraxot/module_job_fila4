<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobManagerResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\BulkAction;
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Filament\Actions\BulkAction;
use Override;
>>>>>>> 7d4742a (.)
use Filament\Actions\DeleteBulkAction;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\JobManagerResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListJobManagers extends XotBaseListRecords
{
    protected static string $resource = JobManagerResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
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
            'queue' => TextColumn::make('queue')->sortable()->searchable(),
            'payload' => TextColumn::make('payload')->wrap()->searchable(),
            'attempts' => TextColumn::make('attempts')->numeric()->sortable(),
            'reserved_at' => TextColumn::make('reserved_at')->dateTime()->sortable(),
            'available_at' => TextColumn::make('available_at')->dateTime()->sortable(),
<<<<<<< HEAD
=======
            'queue' => TextColumn::make('queue')
                ->sortable()
                ->searchable(),
            'payload' => TextColumn::make('payload')
                ->wrap()
                ->searchable(),
            'attempts' => TextColumn::make('attempts')
                ->numeric()
                ->sortable(),
            'reserved_at' => TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            'available_at' => TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
     * @return array<string, \Filament\Actions\BulkAction>
     */
>>>>>>> e1b0bf9 (.)
=======
     * @return array<string, BulkAction>
     */
    #[Override]
>>>>>>> 7d4742a (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
