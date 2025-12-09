<?php

declare(strict_types=1);

/**
 * @see HusamTariq\FilamentDatabaseSchedule
 */

namespace Modules\Job\Observers;

use Modules\Job\Enums\Status;
use Modules\Job\Models\Schedule;
use Modules\Job\Services\ScheduleService;

class ScheduleObserver
{
    /**
     * Undocumented function.
     */
    public function created(): void
    {
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
    public function updated(Schedule $_schedule): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function updated(Schedule $_schedule): void
=======
    public function updated(Schedule $schedule): void
>>>>>>> a12f125f4a (.)
=======
    public function updated(Schedule $_schedule): void
>>>>>>> b93ef594b4 (.)
=======
    public function updated(Schedule $schedule): void
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    {
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
    public function deleted(Schedule $schedule): void
    {
        $schedule->status = Status::Trashed;
        $schedule->saveQuietly();
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
    public function restored(Schedule $schedule): void
    {
        $schedule->status = Status::Inactive;
        $schedule->saveQuietly();
    }

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
    public function saved(Schedule $_schedule): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function saved(Schedule $_schedule): void
=======
    public function saved(Schedule $schedule): void
>>>>>>> a12f125f4a (.)
=======
    public function saved(Schedule $_schedule): void
>>>>>>> b93ef594b4 (.)
=======
    public function saved(Schedule $schedule): void
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    {
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
    protected function clearCache(): void
    {
        if (config('job::cache.enabled')) {
            $scheduleService = app(ScheduleService::class);
            if ($scheduleService !== null) {
                $scheduleService->clearCache();
            }
        }
    }
}
