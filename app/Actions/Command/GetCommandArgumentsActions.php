<?php

declare(strict_types=1);

namespace Modules\Job\Actions\Command;

use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Console\Command\Command;

class GetCommandArgumentsActions
{
    use QueueableAction;

    /**
     * @return array<string, mixed>
     */
    public function execute(Command $command): array
    {
        $arguments = [];
        foreach ($command->getDefinition()->getArguments() as $argument) {
            $name = $argument->getName();
            $arguments[$name] = [
                'name' => $name,
                'default' => $argument->getDefault(),
                'required' => $argument->isRequired(),
            ];
        }

        return $arguments;
    }
}
