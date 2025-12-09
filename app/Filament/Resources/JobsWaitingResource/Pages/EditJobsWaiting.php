<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobsWaitingResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

<<<<<<< HEAD
class EditJobsWaiting extends XotBaseEditRecord
=======
<<<<<<< HEAD
class EditJobsWaiting extends XotBaseEditRecord
=======
class EditJobsWaiting extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
{
    protected static string $resource = JobsWaitingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
