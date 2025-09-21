<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/JobBatchesResource/Pages/ListJobBatches.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobBatchResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
use Filament\Actions\BulkAction;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables;
=======
=======
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ActionGroup;
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\BulkAction;
use Filament\Actions\ActionGroup;
use Override;
use Filament\Actions\DeleteBulkAction;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables;
=======
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Resources\JobBatchResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListJobBatches extends XotBaseListRecords
{
    protected static string $resource = JobBatchResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    #[Override]
    public function getTableColumns(): array
    {
        Assert::string(
            $date_format = config('app.date_format'),
            '[' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
        );
<<<<<<< HEAD
=======
=======
    public function getTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'), '['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableColumns(): array
    {
        Assert::string(
            $date_format = config('app.date_format'),
            '[' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
        );
>>>>>>> b93ef594b4 (.)
=======
    public function getTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'), '['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable()
                ->copyable(),
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->wrap(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            'total_jobs' => TextColumn::make('total_jobs')->numeric()->sortable(),
            'pending_jobs' => TextColumn::make('pending_jobs')->numeric()->sortable(),
            'failed_jobs' => TextColumn::make('failed_jobs')->numeric()->sortable(),
            'progress' => TextColumn::make('progress')
                ->formatStateUsing(fn($record) => $record->progress() . '%')
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            'total_jobs' => TextColumn::make('total_jobs')
                ->numeric()
                ->sortable(),
            'pending_jobs' => TextColumn::make('pending_jobs')
                ->numeric()
                ->sortable(),
            'failed_jobs' => TextColumn::make('failed_jobs')
                ->numeric()
                ->sortable(),
            'progress' => TextColumn::make('progress')
                ->formatStateUsing(fn ($record) => $record->progress().'%')
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'total_jobs' => TextColumn::make('total_jobs')->numeric()->sortable(),
            'pending_jobs' => TextColumn::make('pending_jobs')->numeric()->sortable(),
            'failed_jobs' => TextColumn::make('failed_jobs')->numeric()->sortable(),
            'progress' => TextColumn::make('progress')
                ->formatStateUsing(fn($record) => $record->progress() . '%')
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                ->sortable(),
            'failed_job_ids' => TextColumn::make('failed_job_ids')
                ->wrap()
                ->searchable()
                ->limit(50),
<<<<<<< HEAD
            'options' => TextColumn::make('options')->wrap()->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')->dateTime($date_format)->sortable(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'options' => TextColumn::make('options')->wrap()->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')->dateTime($date_format)->sortable(),
=======
=======
>>>>>>> origin/develop
            'options' => TextColumn::make('options')
                ->wrap()
                ->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')
                ->dateTime($date_format)
                ->sortable(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'options' => TextColumn::make('options')->wrap()->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')->dateTime($date_format)->sortable(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime($date_format)
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'finished_at' => TextColumn::make('finished_at')
                ->dateTime($date_format)
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
     */
    #[Override]
=======
<<<<<<< HEAD
     * @return array<string, Action|ActionGroup>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public function getTableActions(): array
    {
        return [];
    }

    /**
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, BulkAction>
     */
    #[Override]
=======
     * @return array<string, \Filament\Actions\BulkAction>
     */
>>>>>>> a12f125f4a (.)
=======
     * @return array<string, BulkAction>
     */
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string, Tables\Actions\BulkAction>
     */
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }

    /**
     * @return array<Action>
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
    protected function getHeaderActions(): array
    {
        return [
            Action::make('prune_batches')
                ->requiresConfirmation()
                ->color('danger')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
                ->action(static function (): void {
                    Artisan::call('queue:prune-batches');
                    Notification::make()
                        ->title('All batches have been pruned.')
                        ->success()
                        ->send();
                }),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
                ->action(
                    static function (): void {
                        Artisan::call('queue:prune-batches');
                        Notification::make()
                            ->title('All batches have been pruned.')
                            ->success()
                            ->send();
                    }
                ),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }
}
