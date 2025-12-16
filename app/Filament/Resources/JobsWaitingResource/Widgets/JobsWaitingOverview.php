<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Support\Facades\DB;
use Modules\Job\Models\Job;
use Modules\Job\Models\JobManager;
use Modules\Job\Traits\FormatSeconds;
use Modules\Xot\Actions\Cast\SafeEloquentCastAction;

/**
 * --....
 */
final class JobsWaitingOverview extends BaseWidget
{
    use FormatSeconds;

    /**
     * @return array<int, Stat>
     */
    protected function getCards(): array
    {
        $waitingJobsCount = $this->getWaitingJobsCount();
        [$totalSeconds, $averageSeconds] = $this->getAggregatedTimes();

        $averageTime = $averageSeconds > 0.0
            ? ceil($averageSeconds).'s'
            : '0';
        $totalTime = $totalSeconds > 0
            ? $this->formatSeconds($totalSeconds)
            : '0';

        return [
            Stat::make('waiting_jobs', $waitingJobsCount),
            Stat::make('execution_time', $totalTime),
            Stat::make('average_time', $averageTime),
        ];
    }

    private function getWaitingJobsCount(): int
    {
        return Job::query()->count();
    }

    /**
     * @return array{int, float}
     */
    private function getAggregatedTimes(): array
    {
        $aggregatedInfo = $this->fetchAggregatedInfo();
        $castAction = app(SafeEloquentCastAction::class);

        if ($aggregatedInfo === null) {
            return [0, 0.0];
        }

        $averageSeconds = (float) $castAction->getStringAttribute(
            $aggregatedInfo,
            'average_time_elapsed',
            '0',
        );

        $totalSeconds = (int) $castAction->getStringAttribute(
            $aggregatedInfo,
            'total_time_elapsed',
            '0',
        );

        return [$totalSeconds, $averageSeconds];
    }

    /**
     * @return array<int, Expression>
     */
    private function aggregationColumns(): array
    {
        return [
            DB::raw(
                'SUM(finished_at - started_at) as total_time_elapsed',
            ),
            DB::raw(
                'AVG(finished_at - started_at) as average_time_elapsed',
            ),
        ];
    }

    private function fetchAggregatedInfo(): ?JobManager
    {
        return JobManager::query()
            ->select($this->aggregationColumns())
            ->first();
    }
}
