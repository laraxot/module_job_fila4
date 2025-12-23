<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Job;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Job\Actions\DummyAction;
use Modules\Job\Models\FailedJob as FailedJobModel;
use Modules\Job\Models\Job as JobModel;
use Modules\Job\Models\JobBatch as JobBatchModel;
use Modules\Xot\Actions\GetViewAction;
use Webmozart\Assert\Assert;

use function Safe\putenv;

/**
 * Class RolePermission.
 */
class Status extends Component
{
    public array $form_data = [];

    public string $out = '';

    public string $old_value = '';

    public function mount(): void
    {
        Artisan::call('queue:monitor', ['queues' => 'default,queue01,emails']);
        $this->out .= Artisan::output();
        Artisan::call('worker:check');
        $this->out .= Artisan::output();

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        $this->out .= '<br/>[' . JobModel::count() . '] Jobs';
        $this->out .= '<br/>[' . FailedJobModel::count() . '] Failed Jobs';
        $this->out .= '<br/>[' . JobBatchModel::count() . '] Job Batch';
        $queue_conn = getenv('QUEUE_CONNECTION');
        if ($queue_conn === false) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->out .= '<br/>['.JobModel::count().'] Jobs';
        $this->out .= '<br/>['.FailedJobModel::count().'] Failed Jobs';
        $this->out .= '<br/>['.JobBatchModel::count().'] Job Batch';
        $queue_conn = getenv('QUEUE_CONNECTION');
        if ($queue_conn === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->out .= '<br/>[' . JobModel::count() . '] Jobs';
        $this->out .= '<br/>[' . FailedJobModel::count() . '] Failed Jobs';
        $this->out .= '<br/>[' . JobBatchModel::count() . '] Job Batch';
        $queue_conn = getenv('QUEUE_CONNECTION');
        if ($queue_conn === false) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        }

        $this->old_value = $queue_conn;
        $this->form_data['conn'] = $queue_conn;

        // $env_file=base_path('.env');
        // dddx(getenv(base_path('')));
        // $env_file = getenv('LARAVEL_DIR').'/.env';
        // dddx();
    }

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();

        $acts = [
            /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
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
>>>>>>> laraxot/develop
            (object) [
                'name' => 'clear',
                'label' => 'Delete all of the jobs from the specified queue',
            ],
            (object) [
                'name' => 'failed',
                'label' => 'List all of the failed queue jobs',
            ],
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
            (object) [
                'name' => 'flush',
                'label' => 'Flush all of the failed queue jobs',
            ],
            /* -- VUOLE ID
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
             * (object) [
             * 'name' => 'forget',
             * 'label' => 'Delete a failed queue job',
             * ],
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
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
>>>>>>> laraxot/develop
            (object) [
                'name' => 'prune-batches',
                'label' => 'Prune stale entries from the batches database',
            ],
            (object) [
                'name' => 'prune-failed',
                'label' => ' Prune stale entries from the failed jobs table',
            ],
            (object) [
                'name' => 'restart',
                'label' => 'Restart queue worker daemons after their current job',
            ],
            (object) [
                'name' => 'retry',
                'label' => 'Retry a failed queue job',
            ],
            /*-- vuole parametro
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
             * (object) [
             * 'name' => 'retry-batch',
             * 'label' => 'Retry the failed jobs for a batch',
             * ],
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
            /*-- rimane appeso
             * (object) [
             * 'name' => 'work',
             * 'label' => 'Start processing jobs on the queue as a daemon',
             * ],
             */
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
        ];

        $view_params = [
            'view' => $view,
            'acts' => $acts,
        ];

        return view($view, $view_params);
    }

    public function updatedFormData(string $value, string $key): void
    {
        // dddx([$value,$key,$this->form_data]);
        if ($key === 'conn') {
            // putenv ("QUEUE_CONNECTION=".$value);
            $this->saveEnv();
        }
    }

    public function saveEnv(): void
    {
        $env_file = base_path('.env');
        $env_content = File::get($env_file);

        $conn = $this->form_data['conn'] ?? null;
        Assert::string($conn, '[' . __LINE__ . '][' . class_basename($this) . ']');

        $new_content = Str::replace(
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
            'QUEUE_CONNECTION=' . $this->old_value,
            'QUEUE_CONNECTION=' . $conn,
            $env_content,
        );
        putenv('QUEUE_CONNECTION=' . $conn);
        Assert::string($new_content, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            'QUEUE_CONNECTION='.$this->old_value,
            'QUEUE_CONNECTION='.$this->form_data['conn'],
            $env_content
        );
        putenv('QUEUE_CONNECTION='.$this->form_data['conn']);
        Assert::string($new_content, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'QUEUE_CONNECTION=' . $this->old_value,
            'QUEUE_CONNECTION=' . $this->form_data['conn'],
            $env_content,
        );
        putenv('QUEUE_CONNECTION=' . $this->form_data['conn']);
        Assert::string($new_content, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        File::put($env_file, $new_content);
        $this->old_value = $conn;
    }

    public function artisan(string $cmd): void
    {
        $this->out .= '<hr/>';
<<<<<<< HEAD
        Artisan::call('queue:' . $cmd);
=======
<<<<<<< HEAD
        Artisan::call('queue:' . $cmd);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Artisan::call('queue:' . $cmd);
=======
        Artisan::call('queue:'.$cmd);
>>>>>>> a12f125f4a (.)
=======
        Artisan::call('queue:' . $cmd);
>>>>>>> b93ef594b4 (.)
=======
        Artisan::call('queue:'.$cmd);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        $this->out .= Artisan::output();
        $this->out .= '<hr/>';
    }

    public function dummyAction(): void
    {
        for ($i = 0; $i < 1000; $i++) {
<<<<<<< HEAD
            app(DummyAction::class)->onQueue()->execute();
=======
<<<<<<< HEAD
            app(DummyAction::class)->onQueue()->execute();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            app(DummyAction::class)->onQueue()->execute();
=======
            app(DummyAction::class)
                ->onQueue()
                ->execute();
>>>>>>> a12f125f4a (.)
=======
            app(DummyAction::class)->onQueue()->execute();
>>>>>>> b93ef594b4 (.)
=======
            app(DummyAction::class)
                ->onQueue()
                ->execute();
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        }

        session()->flash('message', '1000 dummy Action');
    }
}
