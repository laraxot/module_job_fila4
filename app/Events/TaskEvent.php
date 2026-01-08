<?php

declare(strict_types=1);

namespace Modules\Job\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\Job\Models\Task;

class TaskEvent extends Event
{
    use Dispatchable;
    use SerializesModels;

    /**
     * Constructor.
     */
<<<<<<< HEAD
    public function __construct(
        public Task $task,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        public Task $task,
    ) {}
=======
    public function __construct(public Task $task) {}
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        public Task $task,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public Task $task) {}
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
}
