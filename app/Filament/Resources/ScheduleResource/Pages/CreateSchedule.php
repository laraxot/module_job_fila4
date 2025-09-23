<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Form;
=======
use Filament\Schemas\Schema;
>>>>>>> 9836ef8 (.)
=======
use Filament\Schemas\Schema;
>>>>>>> 626dfb0 (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Webmozart\Assert\Assert;

class CreateSchedule extends XotBaseCreateRecord
{
    use NavigationPageLabelTrait;

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

    public function getformSchema(): array
    {
        Assert::isArray($res = $this->getResource()::getFormSchema());

        return $res;
    }

    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $form->components($this->getFormSchema());
=======
        return $form->schema($this->getFormSchema());
>>>>>>> 9836ef8 (.)
=======
        return $form->schema($this->getFormSchema());
>>>>>>> 626dfb0 (.)
    }

    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }
}
