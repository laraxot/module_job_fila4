<?php

/**
 * @see https://www.freshleafmedia.co.uk/blog/streaming-laravel-command-output-to-the-browser
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Widgets;

use Exception;
use Filament\Widgets\Widget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\StreamOutput;

use function Safe\fopen;

class ClockWidget extends Widget
{
    /** @var string */
    public $time = '---';

    public bool $run = false;

<<<<<<< HEAD
    protected string $view = 'job::filament.widgets.clock-widget';
=======
<<<<<<< HEAD
    protected string $view = 'job::filament.widgets.clock-widget';
=======
<<<<<<< HEAD
    protected string $view = 'job::filament.widgets.clock-widget';
=======
    protected static string $view = 'job::filament.widgets.clock-widget';
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop

    protected int|string|array $columnSpan = 'full';

    public function begin(): void
    {
        $this->beginProcess();
    }

    public function beginProcess(): void
    {
        $this->time = '';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        $process = Process::path(base_path())->start('php artisan queue:listen --timeout=0');
        while ($process->running()) {
            // ...
            $this->stream(
                to: 'count',
                content: $this->time,
                replace: true,
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $process = Process::path(base_path())
            ->start('php artisan queue:listen --timeout=0');
        while ($process->running()) {
            // ...
            $this->stream(to: 'count', content: $this->time, replace: true);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $process = Process::path(base_path())->start('php artisan queue:listen --timeout=0');
        while ($process->running()) {
            // ...
            $this->stream(
                to: 'count',
                content: $this->time,
                replace: true,
            );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
            // Pause for 1 second between numbers...
            sleep(3);
            // se no troppe richieste

            $this->time .= $process->latestOutput();
        }

        $process->wait();
    }

    public function beginStream(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        $this->run = !$this->run;
        // $output = new BufferedOutput();
        /*
         * $output = new class() extends StreamOutput {
         * public function __construct()
         * {
         * parent::__construct(fopen('php://output', 'w'));
         * }
         *
         * protected function doWrite(string $message, bool $newline): void
         * {
         * if ('' != $message) {
         * dddx($message);
         * }
         *
         * $message = str_replace("\n", '<br>', $message);
         *
         * if ($newline) {
         * $message .= '<br>';
         * }
         *
         * parent::doWrite($message, false);
         * }
         * };
         */
        $resource = fopen('php://stdout', 'w');
        if ($resource === false) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        $this->run = ! $this->run;
=======
        $this->run = !$this->run;
>>>>>>> b93ef594b4 (.)
        // $output = new BufferedOutput();
        /*
         * $output = new class() extends StreamOutput {
         * public function __construct()
         * {
         * parent::__construct(fopen('php://output', 'w'));
         * }
         *
         * protected function doWrite(string $message, bool $newline): void
         * {
         * if ('' != $message) {
         * dddx($message);
         * }
         *
         * $message = str_replace("\n", '<br>', $message);
         *
         * if ($newline) {
         * $message .= '<br>';
         * }
         *
         * parent::doWrite($message, false);
         * }
         * };
         */
        $resource = fopen('php://stdout', 'w');
        if ($resource === false) {
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        $this->run = ! $this->run;
        // $output = new BufferedOutput();
        /*
        $output = new class() extends StreamOutput {
            public function __construct()
            {
                parent::__construct(fopen('php://output', 'w'));
            }

            protected function doWrite(string $message, bool $newline): void
            {
                if ('' != $message) {
                    dddx($message);
                }

                $message = str_replace("\n", '<br>', $message);

                if ($newline) {
                    $message .= '<br>';
                }

                parent::doWrite($message, false);
            }
        };
        */
        $resource = fopen('php://stdout', 'w');
        if ($resource === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        }
        $output = new StreamOutput($resource);
        // $output = new StreamOutput(fopen('/path/to/output.log', 'a', false));

        Artisan::call('route:list', [], $output);
        dddx($output);

        // dddx($output);
        // dddx($output->fetch());
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
         * while ($this->run) {
         * // Stream the current count to the browser...
         * $this->stream(
         * to: 'count',
         * content: $this->time,
         * replace: true,
         * );
         *
         * // Pause for 1 second between numbers...
         * sleep(1);
         *
         * // Decrement the counter...
         * // $this->time = (string) Carbon::now()->format('H:i:s');
         * $this->time = $output->fetch().PHP_EOL;
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        while ($this->run) {
            // Stream the current count to the browser...
            $this->stream(
                to: 'count',
                content: $this->time,
                replace: true,
            );

            // Pause for 1 second between numbers...
            sleep(1);

            // Decrement the counter...
            // $this->time = (string) Carbon::now()->format('H:i:s');
            $this->time = $output->fetch().PHP_EOL;
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }
}
