<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ExportResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Override;
>>>>>>> 7d4742a (.)
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\ExportResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListExports extends XotBaseListRecords
{
    protected static string $resource = ExportResource::class;

    /**
     * @return array<string, Column>
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
            'name' => TextColumn::make('name')->sortable()->searchable(),
            'status' => TextColumn::make('status')->sortable()->searchable(),
=======
            'name' => TextColumn::make('name')
                ->sortable()
                ->searchable(),
            'status' => TextColumn::make('status')
                ->sortable()
                ->searchable(),
>>>>>>> e1b0bf9 (.)
=======
            'name' => TextColumn::make('name')->sortable()->searchable(),
            'status' => TextColumn::make('status')->sortable()->searchable(),
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
}
