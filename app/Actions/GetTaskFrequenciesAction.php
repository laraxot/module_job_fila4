<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

use Exception;
use Spatie\QueueableAction\QueueableAction;

class GetTaskFrequenciesAction
{
    use QueueableAction;

    /**
     * @return array<string, mixed>
     */
    public function execute(): array
    {
        $res = config('totem.frequencies');
        if (\is_array($res)) {
            /** @var array<string, mixed> */
            return $res;
        }

<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
