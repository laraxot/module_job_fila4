<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Widgets\ClockWidget;
use Modules\Xot\Filament\Pages\XotBasePage;

class JobStatus extends XotBasePage
{
    public string $out = '';

    protected string $view = 'job::filament.pages.job-status';

    /**
     * @return array<string, mixed>
     */
    public function getHeaderWidgets(): array
    {
        return [
            ClockWidget::make(),
        ];
    }

    

    public function artisan(string $cmd): void
    {
        $this->out = '';
        Artisan::call($cmd);
        $this->out .= Artisan::output();
    }

    /**
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
        return [
            'acts' => $this->getActs(),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function getActs(): array
    {
        return [
            (object) [
                'name' => 'batches-table',
                'label' => 'Create a migration for the batches database table',
            ],
            (object) [
                'name' => 'failed-table',
                'label' => ' Create a migration for the failed queue jobs database table',
            ],
            (object) [
                'name' => 'table',
                'label' => 'Create a migration for the queue jobs database table',
            ],
            (object) [
                'name' => 'queue:clear',
                'label' => 'Delete all of the jobs from the specified queue',
            ],
            (object) [
                'name' => 'queue:failed',
                'label' => 'List all of the failed queue jobs',
            ],
            (object) [
                'name' => 'queue:flush',
                'label' => 'Flush all of the failed queue jobs',
            ],
            (object) [
                'name' => 'forget',
                'label' => 'Delete a failed queue job',
            ],
            (object) [
                'name' => 'queue:prune-batches',
                'label' => 'Prune stale entries from the batches database',
            ],
            (object) [
                'name' => 'queue:prune-failed',
                'label' => ' Prune stale entries from the failed jobs table',
            ],
            (object) [
                'name' => 'queue:restart',
                'label' => 'Restart queue worker daemons after their current job',
            ],
            (object) [
                'name' => 'queue:retry',
                'label' => 'Retry a failed queue job',
            ],
            (object) [
                'name' => 'retry-batch',
                'label' => 'Retry the failed jobs for a batch',
            ],
            (object) [
                'name' => 'worker:check',
                'label' => 'Ensure that the queue listener is running.',
            ],
            (object) [
                'name' => 'route:list',
                'label' => 'Route list',
            ],
        ];
    }
}
