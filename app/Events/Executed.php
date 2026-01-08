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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        $task->results()->create([
            'duration' => $time_elapsed_secs * 1000,
            'result' => $output,
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $task->results()->create(
            [
                'duration' => $time_elapsed_secs * 1000,
                'result' => $output,
            ]
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

        $task->notify(new TaskCompleted($output));
        $task->autoCleanup();
    }
}
