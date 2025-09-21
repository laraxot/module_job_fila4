<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Override;
use Filament\Schemas\Schema;
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Schema;
=======
use Filament\Forms\Form;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
class EditSchedule extends XotBaseEditRecord
=======
<<<<<<< HEAD
class EditSchedule extends XotBaseEditRecord
=======
class EditSchedule extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
{
    use NavigationPageLabelTrait;

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

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
    public function getformSchema(): array
    {
        Assert::isArray($res = $this->getResource()::getFormSchema());

        return $res;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    #[Override]
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
<<<<<<< HEAD
=======
=======
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components($this->getFormSchema());
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function form(Schema $schema): Schema
    {
        return $schema->components($this->getFormSchema());
>>>>>>> b93ef594b4 (.)
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema());
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
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
