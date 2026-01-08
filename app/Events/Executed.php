<?php

declare(strict_types=1);

namespace Modules\Job\Events;

use Modules\Job\Models\Task;
use Modules\Job\Notifications\TaskCompleted;

class Executed extends BroadcastingEvent
{
    /**
     * Executed constructor.
     *
     * @return void
     */
    public function __construct(Task $task, float $started, string $output)
    {
        parent::__construct($task);

        $time_elapsed_secs = microtime(true) - $started;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
        $task->results()->create([
            'duration' => $time_elapsed_secs * 1000,
            'result' => $output,
        ]);
<<<<<<< HEAD
=======
        $task->results()->create(
            [
                'duration' => $time_elapsed_secs * 1000,
                'result' => $output,
            ]
        );
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)

        $task->notify(new TaskCompleted($output));
        $task->autoCleanup();
    }
}
