<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Widgets\ClockWidget;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class JobStatus extends Page
{
    use NavigationLabelTrait;

    public string $out = '';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-computer-desktop';

    protected string $view = 'job::filament.pages.job-status';

    /**
     * @return array<string, mixed>
     */
    public function getHeaderWidgets(): array
    {
        return [
            'clock' => ClockWidget::make(),
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
            'queue:clear' => (object) [
                'name' => 'queue:clear',
                'label' => 'Delete all of the jobs from the specified queue',
            ],
            'queue:failed' => (object) [
                'name' => 'queue:failed',
                'label' => 'List all of the failed queue jobs',
            ],
            'queue:flush' => (object) [
                'name' => 'queue:flush',
                'label' => 'Flush all of the failed queue jobs',
            ],
            'queue:prune-batches' => (object) [
                'name' => 'queue:prune-batches',
                'label' => 'Prune stale entries from the batches database',
            ],
            'queue:prune-failed' => (object) [
                'name' => 'queue:prune-failed',
                'label' => ' Prune stale entries from the failed jobs table',
            ],
            'queue:restart' => (object) [
                'name' => 'queue:restart',
                'label' => 'Restart queue worker daemons after their current job',
            ],
            'queue:retry' => (object) [
                'name' => 'queue:retry',
                'label' => 'Retry a failed queue job',
            ],
            'worker:check' => (object) [
                'name' => 'worker:check',
                'label' => 'Ensure that the queue listener is running.',
            ],
            'route:list' => (object) [
                'name' => 'route:list',
                'label' => 'Route list',
            ],
        ];
    }
}
