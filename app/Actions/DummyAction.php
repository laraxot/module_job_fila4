<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

use Spatie\QueueableAction\QueueableAction;

class DummyAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(): void
    {
        // The business logic goes here, this can be executed in an async job.
<<<<<<< HEAD
        echo 'hello' . PHP_EOL;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        echo 'hello' . PHP_EOL;
=======
        echo 'hello'.PHP_EOL;
>>>>>>> a12f125f4a (.)
=======
        echo 'hello' . PHP_EOL;
>>>>>>> b93ef594b4 (.)
=======
        echo 'hello'.PHP_EOL;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
