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
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
                'verbose',
                'quiet',
                'ansi',
                'no-ansi',
<<<<<<< HEAD
=======
                'verbose', 'quiet', 'ansi', 'no-ansi',
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
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
