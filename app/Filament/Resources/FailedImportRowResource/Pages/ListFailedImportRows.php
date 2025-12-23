<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\FailedImportRowResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Override;
>>>>>>> 7d4742a (.)
use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\FailedImportRowResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListFailedImportRows extends XotBaseListRecords
{
    protected static string $resource = FailedImportRowResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->searchable()->sortable(),
<<<<<<< HEAD
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            'import_id' => TextColumn::make('import_id')
                ->searchable()
                ->sortable()
                ->copyable(),
            'data' => TextColumn::make('data')
                ->searchable()
                ->wrap()
                ->limit(100),
            'validation_error' => TextColumn::make('validation_error')
                ->searchable()
                ->wrap()
                ->limit(200),
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
=======
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
>>>>>>> e1b0bf9 (.)
=======
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
>>>>>>> 7d4742a (.)
        ];
    }
}
