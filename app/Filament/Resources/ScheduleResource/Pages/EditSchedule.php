<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Override;
=======
>>>>>>> laraxot/develop
use Webmozart\Assert\Assert;

class EditSchedule extends XotBaseEditRecord
{
<<<<<<< HEAD
    use NavigationPageLabelTrait;
=======
    // TransTrait è già incluso in XotBaseEditRecord - non ridichiarare
>>>>>>> laraxot/develop

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

<<<<<<< HEAD
    #[Override]
=======
    #[\Override]
>>>>>>> laraxot/develop
    public function getformSchema(): array
    {
        Assert::isArray($res = $this->getResource()::getFormSchema());

        return $res;
    }

    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }

    // protected function getRedirectUrl(): string
    // {
    //    return $this->getResource()::getUrl('index');
    // }
}
