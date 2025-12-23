<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobResource;
>>>>>>> laraxot/develop

class EditJob extends XotBaseEditRecord
{
    protected static string $resource = JobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
