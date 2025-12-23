<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobResource;

class EditJob extends XotBaseEditRecord
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobResource;

class EditJob extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
{
    protected static string $resource = JobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
