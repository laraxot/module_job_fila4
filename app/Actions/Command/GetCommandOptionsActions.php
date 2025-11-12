<?php

declare(strict_types=1);

namespace Modules\Job\Actions\Command;

use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Console\Command\Command;

class GetCommandOptionsActions
{
    use QueueableAction;

    public function execute(Command $command): array
    {
        $options = [
            'withValue' => [],
            'withoutValue' => [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
                'verbose',
                'quiet',
                'ansi',
                'no-ansi',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                'verbose', 'quiet', 'ansi', 'no-ansi',
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                'verbose', 'quiet', 'ansi', 'no-ansi',
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            ],
        ];
        foreach ($command->getDefinition()->getOptions() as $option) {
            if ($option->acceptValue()) {
                $options['withValue'][] = (object) [
                    'name' => $option->getName(),
                    'default' => $option->getDefault(),
                    'required' => $option->isValueRequired(),
                ];
            } else {
                $options['withoutValue'][] = $option->getName();
            }
        }

        return $options;
    }
}
