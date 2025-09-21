<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/FailedJobsResource/Pages/ListFailedJobs.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\FailedJobResource\Pages;

<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Resources\FailedJobResource;
use Modules\Job\Models\FailedJob;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListFailedJobs extends XotBaseListRecords
{
    protected static string $resource = FailedJobResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->searchable()->sortable(),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->searchable()->sortable(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            'uuid' => TextColumn::make('uuid')
                ->searchable()
                ->sortable()
                ->copyable(),
<<<<<<< HEAD
            'connection' => TextColumn::make('connection')->searchable()->sortable(),
            'queue' => TextColumn::make('queue')->searchable()->sortable(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'connection' => TextColumn::make('connection')->searchable()->sortable(),
            'queue' => TextColumn::make('queue')->searchable()->sortable(),
=======
=======
>>>>>>> origin/develop
            'connection' => TextColumn::make('connection')
                ->searchable()
                ->sortable(),
            'queue' => TextColumn::make('queue')
                ->searchable()
                ->sortable(),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'connection' => TextColumn::make('connection')->searchable()->sortable(),
            'queue' => TextColumn::make('queue')->searchable()->sortable(),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            'payload' => TextColumn::make('payload')
                ->searchable()
                ->wrap()
                ->limit(50),
            'exception' => TextColumn::make('exception')
                ->searchable()
                ->wrap()
                ->limit(100),
<<<<<<< HEAD
            'failed_at' => TextColumn::make('failed_at')->dateTime()->sortable(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'failed_at' => TextColumn::make('failed_at')->dateTime()->sortable(),
=======
            'failed_at' => TextColumn::make('failed_at')
                ->dateTime()
                ->sortable(),
>>>>>>> a12f125f4a (.)
=======
            'failed_at' => TextColumn::make('failed_at')->dateTime()->sortable(),
>>>>>>> b93ef594b4 (.)
=======
            'failed_at' => TextColumn::make('failed_at')
                ->dateTime()
                ->sortable(),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, Action>
     */
    #[Override]
=======
<<<<<<< HEAD
     * @return array<string, Action>
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
     * @return array<string, \Filament\Actions\Action>
     */
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    protected function getHeaderActions(): array
    {
        return [
            'retry_all' => Action::make('retry_all')
                ->requiresConfirmation()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
                ->action(static function (): void {
                    Artisan::call('queue:retry all');
                    Notification::make()
                        ->title('All failed jobs have been pushed back onto the queue.')
                        ->success()
                        ->send();
                }),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            'delete_all' => Action::make('delete_all')
                ->requiresConfirmation()
                ->color('danger')
                ->action(static function (): void {
                    FailedJob::truncate();
                    Notification::make()
                        ->title('All failed jobs have been removed.')
                        ->success()
                        ->send();
                }),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                ->action(
                    static function (): void {
                        Artisan::call('queue:retry all');
                        Notification::make()
                            ->title('All failed jobs have been pushed back onto the queue.')
                            ->success()
                            ->send();
                    }
                ),

            'delete_all' => Action::make('delete_all')
                ->requiresConfirmation()
                ->color('danger')
                ->action(
                    static function (): void {
                        FailedJob::truncate();
                        Notification::make()
                            ->title('All failed jobs have been removed.')
                            ->success()
                            ->send();
                    }
                ),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'delete_all' => Action::make('delete_all')
                ->requiresConfirmation()
                ->color('danger')
                ->action(static function (): void {
                    FailedJob::truncate();
                    Notification::make()
                        ->title('All failed jobs have been removed.')
                        ->success()
                        ->send();
                }),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];
    }
}
