<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

use Spatie\QueueableAction\QueueableAction;

class ExecuteTaskAction
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    public function execute(string $_task_id): string
    {
        /*
         * $task = Task::findOrFail($task_id);
         * $start = microtime(true);
         * try {
         * Artisan::call($task->command, $task->compileParameters());
         * $output = Artisan::output();
         * } catch (\Exception $e) {
         * $output = $e->getMessage();
         * }
         * Executed::dispatch($task, $start, $output);
         *
         * return $output;
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function execute(string $task_id): string
    {
        /*
        $task = Task::findOrFail($task_id);
        $start = microtime(true);
        try {
            Artisan::call($task->command, $task->compileParameters());
            $output = Artisan::output();
        } catch (\Exception $e) {
            $output = $e->getMessage();
        }
        Executed::dispatch($task, $start, $output);

        return $output;
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(string $_task_id): string
    {
        /*
         * $task = Task::findOrFail($task_id);
         * $start = microtime(true);
         * try {
         * Artisan::call($task->command, $task->compileParameters());
         * $output = Artisan::output();
         * } catch (\Exception $e) {
         * $output = $e->getMessage();
         * }
         * Executed::dispatch($task, $start, $output);
         *
         * return $output;
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        dddx('wip');

        return 'WIP';
    }
}
