<?php

declare(strict_types=1);

/**
 * @see https://gist.github.com/ivanvermeyen/b72061c5d70c61e86875
 * @see https://gist.github.com/BenCavens/810758e74718a981c4cd2d2cf532407e
 */

namespace Modules\Job\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

use function Safe\exec;

class WorkerCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'worker:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ensure that the queue listener is running.';

    private string $filename = 'queue.pid';

    /**
     * Create a new command instance.
     */
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
<<<<<<< HEAD
        if (!$this->isQueueListenerRunning()) {
            $pid = $this->startQueueListener();
            $this->comment('Queue listener is being started. pid[' . $pid . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->isQueueListenerRunning()) {
            $pid = $this->startQueueListener();
            $this->comment('Queue listener is being started. pid[' . $pid . ']');
=======
        if (! $this->isQueueListenerRunning()) {
            $pid = $this->startQueueListener();
            $this->comment('Queue listener is being started. pid['.$pid.']');
>>>>>>> a12f125f4a (.)
=======
        if (!$this->isQueueListenerRunning()) {
            $pid = $this->startQueueListener();
            $this->comment('Queue listener is being started. pid[' . $pid . ']');
>>>>>>> b93ef594b4 (.)
=======
        if (! $this->isQueueListenerRunning()) {
            $pid = $this->startQueueListener();
            $this->comment('Queue listener is being started. pid['.$pid.']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            $this->saveQueueListenerPID($pid);
        }

        $this->comment('Queue listener is running.');
    }

    /**
     * Check if the queue listener is running.
     */
    private function isQueueListenerRunning(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        if (
            ($pid = $this->getLastQueueListenerPID()) === '' ||
                ($pid = $this->getLastQueueListenerPID()) === '0' ||
                ($pid = $this->getLastQueueListenerPID()) === false ||
                ($pid = $this->getLastQueueListenerPID()) === null
        ) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (($pid = $this->getLastQueueListenerPID()) === '' || ($pid = $this->getLastQueueListenerPID()) === '0' || ($pid = $this->getLastQueueListenerPID()) === false || ($pid = $this->getLastQueueListenerPID()) === null) {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (($pid = $this->getLastQueueListenerPID()) === '' || ($pid = $this->getLastQueueListenerPID()) === '0' || ($pid = $this->getLastQueueListenerPID()) === false || ($pid = $this->getLastQueueListenerPID()) === null) {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            return false;
        }

        $process_cmd = sprintf('ps -p %s -opid=,cmd=', $pid);
        $this->comment($process_cmd);
        $output = null;
        $process = exec($process_cmd, $output);
        // $processIsQueueListener = str_contains($process, 'queue:listen'); // 5.1
        // if ($process === false) {
        // DISABILITATO PER SBLOCCARE MODULE JOB
        // throw new Exception('['.__LINE__.']['.class_basename($this).']');
        // }

        $this->comment($process);

        // $processIsQueueListener = ! empty($process); // 5.6 - see comments
        return str_contains($process, mb_substr(base_path(), 0, 30));
    }

    /**
     * Get any existing queue listener PID.
     */
    private function getLastQueueListenerPID(): string|bool|null
    {
<<<<<<< HEAD
        if (!Storage::disk('cache')->exists($this->filename)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!Storage::disk('cache')->exists($this->filename)) {
=======
        if (! Storage::disk('cache')->exists($this->filename)) {
>>>>>>> a12f125f4a (.)
=======
        if (!Storage::disk('cache')->exists($this->filename)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! Storage::disk('cache')->exists($this->filename)) {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            return false;
        }

        return Storage::disk('cache')->get($this->filename);
    }

    /**
     * Save the queue listener PID to a file.
     */
    private function saveQueueListenerPID(string $pid): void
    {
        Storage::disk('cache')->put($this->filename, $pid);
        $path = Storage::disk('cache')->path($this->filename);
        $size = Storage::disk('cache')->size($this->filename);
<<<<<<< HEAD
        $this->comment('saved on [' . $path . '] size [' . $size . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->comment('saved on [' . $path . '] size [' . $size . ']');
=======
        $this->comment('saved on ['.$path.'] size ['.$size.']');
>>>>>>> a12f125f4a (.)
=======
        $this->comment('saved on [' . $path . '] size [' . $size . ']');
>>>>>>> b93ef594b4 (.)
=======
        $this->comment('saved on ['.$path.'] size ['.$size.']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /*
     * Start the queue listener.
     *
     * @return string
     * @method Modules\Job\Console\Commands\WorkerCheck::restartQueue() is unused
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
     *
     * private function restartQueue() {
     * // $command = 'php-cli ' . base_path() . '/artisan queue:listen --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!'; // 5.1
     * // $command = 'php-cli '.base_path().'/artisan queue:work --timeout=60 --sleep=5 --tries=3 > /dev/null & echo //$!'; // 5.6 - see comments
     *
     * $command = ' /usr/local/bin/php '.base_path().'/artisan queue:restart --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!';
     * // $this->comment($command);
     *
     * $pid = exec($command);
     * $this->comment($pid);
     *
     * return is_string($pid) ? $pid : (string) $pid;
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop

    private function restartQueue() {
        // $command = 'php-cli ' . base_path() . '/artisan queue:listen --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!'; // 5.1
        // $command = 'php-cli '.base_path().'/artisan queue:work --timeout=60 --sleep=5 --tries=3 > /dev/null & echo //$!'; // 5.6 - see comments

        $command = ' /usr/local/bin/php '.base_path().'/artisan queue:restart --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!';
        // $this->comment($command);

        $pid = exec($command);
        $this->comment($pid);

        return is_string($pid) ? $pid : (string) $pid;
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    /**
     * Start the queue listener.
     */
    private function startQueueListener(): string
    {
        // $command = 'php-cli ' . base_path() . '/artisan queue:listen --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!'; // 5.1
        // $command = 'php-cli '.base_path().'/artisan queue:work --timeout=60 --sleep=5 --tries=3 > /dev/null & echo //$!'; // 5.6 - see comments

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        $command =
            ' /usr/local/bin/php ' .
            base_path() .
            '/artisan queue:work --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $command = ' /usr/local/bin/php '.base_path().'/artisan queue:work --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!';
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $command = ' /usr/local/bin/php '.base_path().'/artisan queue:work --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!';
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        // $this->comment($command);

        // dd($command);

        $pid = exec($command);
        // if ($pid === false) {
        //    throw new Exception('['.__LINE__.']['.class_basename($this).']');
        // }

        $this->comment($pid);

        return $pid;
    }
}
