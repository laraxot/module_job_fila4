<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
=======
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> laraxot/develop
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> laraxot/develop
use Webmozart\Assert\Assert;

class CreateSchedule extends XotBaseCreateRecord
{
    use NavigationPageLabelTrait;
<<<<<<< HEAD
=======
    use TransTrait;
>>>>>>> laraxot/develop

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

    /**
     * @return array<Htmlable|string>
     */
    public function getformSchema(): array
    {
        $res = $this->getResource()::getFormSchema();
        Assert::isArray($res);

        /** @var array<Htmlable|string> $typedRes */
        $typedRes = $res;

        return $typedRes;
    }

<<<<<<< HEAD
    public function form(Schema $schema): Schema
=======
    public function schema(Schema $schema): Schema
>>>>>>> laraxot/develop
    {
        /** @var array<Htmlable|string> $formSchema */
        $formSchema = $this->getFormSchema();
        Assert::isArray($formSchema);

        return $schema->components($formSchema);
    }

    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }
}
