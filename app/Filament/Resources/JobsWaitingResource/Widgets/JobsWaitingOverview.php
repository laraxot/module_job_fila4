<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Widgets;

<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeEloquentCastAction;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeEloquentCastAction;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Modules\Job\Models\Job;
use Modules\Job\Models\JobManager;
use Modules\Job\Traits\FormatSeconds;

/**
 * --....
 */
class JobsWaitingOverview extends BaseWidget
{
    use FormatSeconds;

    protected function getCards(): array
    {
<<<<<<< HEAD
        $jobsWaiting = Job::query()->select(DB::raw('COUNT(*) as count'))->first();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $jobsWaiting = Job::query()->select(DB::raw('COUNT(*) as count'))->first();
=======
        $jobsWaiting = Job::query()
            ->select(DB::raw('COUNT(*) as count'))
            ->first();
>>>>>>> a12f125f4a (.)
=======
        $jobsWaiting = Job::query()->select(DB::raw('COUNT(*) as count'))->first();
>>>>>>> b93ef594b4 (.)
=======
        $jobsWaiting = Job::query()
            ->select(DB::raw('COUNT(*) as count'))
            ->first();
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

        $aggregationColumns = [
            DB::raw('SUM(finished_at - started_at) as total_time_elapsed'),
            DB::raw('AVG(finished_at - started_at) as average_time_elapsed'),
        ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
        $aggregatedInfo = JobManager::query()->select($aggregationColumns)->first();

        if ($aggregatedInfo) {
            $averageTime = app(SafeEloquentCastAction::class)
                ->getStringAttribute($aggregatedInfo, 'average_time_elapsed', '0')
                ? (
                    ceil(
                        (float) app(SafeEloquentCastAction::class)
                            ->getStringAttribute($aggregatedInfo, 'average_time_elapsed', '0'),
                    ) . 's'
                )
                : '0';

            $totalTime = app(SafeEloquentCastAction::class)
                ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0')
                ? (
                    $this->formatSeconds(
                        (int) app(SafeEloquentCastAction::class)
                            ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0'),
                    ) . 's'
                )
                : '0';
<<<<<<< HEAD
=======
=======
        $aggregatedInfo = JobManager::query()
            ->select($aggregationColumns)
            ->first();
=======
        $aggregatedInfo = JobManager::query()->select($aggregationColumns)->first();
>>>>>>> b93ef594b4 (.)

        if ($aggregatedInfo) {
            $averageTime = app(SafeEloquentCastAction::class)
                ->getStringAttribute($aggregatedInfo, 'average_time_elapsed', '0')
                ? (
                    ceil(
                        (float) app(SafeEloquentCastAction::class)
                            ->getStringAttribute($aggregatedInfo, 'average_time_elapsed', '0'),
                    ) . 's'
                )
                : '0';

            $totalTime = app(SafeEloquentCastAction::class)
<<<<<<< HEAD
                ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0') ? 
                $this->formatSeconds((int) app(SafeEloquentCastAction::class)
                    ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0')).'s' : '0';
>>>>>>> a12f125f4a (.)
=======
                ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0')
                ? (
                    $this->formatSeconds(
                        (int) app(SafeEloquentCastAction::class)
                            ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0'),
                    ) . 's'
                )
                : '0';
>>>>>>> b93ef594b4 (.)
=======
        $aggregatedInfo = JobManager::query()
            ->select($aggregationColumns)
            ->first();

        if ($aggregatedInfo) {
            $averageTime = app(\Modules\Xot\Actions\Cast\SafeEloquentCastAction::class)
                ->getStringAttribute($aggregatedInfo, 'average_time_elapsed', '0') ? 
                ceil((float) app(\Modules\Xot\Actions\Cast\SafeEloquentCastAction::class)
                    ->getStringAttribute($aggregatedInfo, 'average_time_elapsed', '0')).'s' : '0';
            
            $totalTime = app(\Modules\Xot\Actions\Cast\SafeEloquentCastAction::class)
                ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0') ? 
                $this->formatSeconds((int) app(\Modules\Xot\Actions\Cast\SafeEloquentCastAction::class)
                    ->getStringAttribute($aggregatedInfo, 'total_time_elapsed', '0')).'s' : '0';
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        } else {
            $averageTime = '0';
            $totalTime = '0';
        }

        return [
            Stat::make('waiting_jobs', $jobsWaiting->count ?? 0),
            Stat::make('execution_time', $totalTime),
            Stat::make('average_time', $averageTime),
        ];
    }
}
