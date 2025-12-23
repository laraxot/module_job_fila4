<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ExportResource\Pages;

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
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
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
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->searchable(),
<<<<<<< HEAD
            'name' => TextColumn::make('name')->sortable()->searchable(),
            'status' => TextColumn::make('status')->sortable()->searchable(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => TextColumn::make('name')->sortable()->searchable(),
            'status' => TextColumn::make('status')->sortable()->searchable(),
=======
=======
>>>>>>> origin/develop
            'name' => TextColumn::make('name')
                ->sortable()
                ->searchable(),
            'status' => TextColumn::make('status')
                ->sortable()
                ->searchable(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'name' => TextColumn::make('name')->sortable()->searchable(),
            'status' => TextColumn::make('status')->sortable()->searchable(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
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
