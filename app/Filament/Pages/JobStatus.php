<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;
use Modules\Job\Filament\Widgets\ClockWidget;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

use function Safe\mb_convert_encoding;

class JobStatus extends Page
{
    use NavigationLabelTrait;

    public string $out = '';

<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-computer-desktop';

    protected string $view = 'job::filament.pages.job-status';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-computer-desktop';

    protected string $view = 'job::filament.pages.job-status';
=======
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static string $view = 'job::filament.pages.job-status';
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    public function getHeaderWidgets(): array
    {
        return [
            ClockWidget::make(),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    

>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    public function artisan(string $cmd): void
    {
        $this->out = '';
        Artisan::call($cmd);
        $this->out .= Artisan::output();
    }

    public function getViewData(): array
    {
        return [
            'acts' => $this->getActs(),
        ];
    }

    public function getActs(): array
    {
        return [
            /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
             * (object) [
             * 'name' => 'batches-table',
             * 'label' => 'Create a migration for the batches database table',
             * ],
             * (object) [
             * 'name' => 'failed-table',
             * 'label' => ' Create a migration for the failed queue jobs database table',
             * ],
             * (object) [
             * 'name' => 'table',
             * 'label' => 'Create a migration for the queue jobs database table',
             * ],
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
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
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            (object) [
                'name' => 'queue:clear',
                'label' => 'Delete all of the jobs from the specified queue',
            ],
            (object) [
                'name' => 'queue:failed',
                'label' => 'List all of the failed queue jobs',
            ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            (object) [
                'name' => 'queue:flush',
                'label' => 'Flush all of the failed queue jobs',
            ],
            /* -- VUOLE ID
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
             * (object) [
             * 'name' => 'forget',
             * 'label' => 'Delete a failed queue job',
             * ],
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            /* --- RIMANE APPESO
             * (object) [
             * 'name' => 'listen',
             * 'label' => 'Listen to a given queue',
             * ],
             */
            /*manca parametro
             * (object) [
             * 'name' => 'monitor',
             * 'label' => 'Monitor the size of the specified queues',
             * ],
             */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            (object) [
                'name' => 'forget',
                'label' => 'Delete a failed queue job',
            ],
            */
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
            /* --- RIMANE APPESO
             * (object) [
             * 'name' => 'listen',
             * 'label' => 'Listen to a given queue',
             * ],
             */
            /*manca parametro
<<<<<<< HEAD
=======
            /* --- RIMANE APPESO
            (object) [
                'name' => 'listen',
                'label' => 'Listen to a given queue',
            ],
            */
            /*manca parametro
>>>>>>> origin/develop
            (object) [
                'name' => 'monitor',
                'label' => 'Monitor the size of the specified queues',
            ],
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
             * (object) [
             * 'name' => 'monitor',
             * 'label' => 'Monitor the size of the specified queues',
             * ],
             */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
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
            /*-- vuole parametro
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
             * (object) [
             * 'name' => 'retry-batch',
             * 'label' => 'Retry the failed jobs for a batch',
             * ],
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            /*-- rimane appeso
             * (object) [
             * 'name' => 'work',
             * 'label' => 'Start processing jobs on the queue as a daemon',
             * ],
             */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            (object) [
                'name' => 'retry-batch',
                'label' => 'Retry the failed jobs for a batch',
            ],
            */
            /*-- rimane appeso
            (object) [
                'name' => 'work',
                'label' => 'Start processing jobs on the queue as a daemon',
            ],
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            /*-- rimane appeso
             * (object) [
             * 'name' => 'work',
             * 'label' => 'Start processing jobs on the queue as a daemon',
             * ],
             */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            (object) [
                'name' => 'worker:check',
                'label' => 'Ensure that the queue listener is running.',
            ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            (object) [
                'name' => 'route:list',
                'label' => 'Route list',
            ],
        ];
    }
}
