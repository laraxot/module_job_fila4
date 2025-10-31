<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Webmozart\Assert\Assert;

class CreateSchedule extends XotBaseCreateRecord
{
    use NavigationPageLabelTrait;

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

    /**
     * @return array<string, mixed>
     */
    public function getformSchema(): array
    {
        $res = $this->getResource()::getFormSchema();
        Assert::isArray($res);
        
        /** @var array<string, mixed> $result */
        $result = $res;

        return $result;
    }

    public function form(Schema $schema): Schema
    {
        /** @var array<int|string, \Filament\Schemas\Components\Component> $formSchema */
        $formSchema = $this->getFormSchema();
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $formSchema */
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
