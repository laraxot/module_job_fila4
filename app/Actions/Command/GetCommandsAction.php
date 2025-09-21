<?php

declare(strict_types=1);

namespace Modules\Job\Actions\Command;

use Illuminate\Console\Application;
use Illuminate\Support\Collection;
use Modules\Job\Datas\CommandData;
use Spatie\LaravelData\DataCollection;
use Symfony\Component\Console\Command\Command;

class GetCommandsAction
{
    /**
     * Execute the action.
     *
     * @return DataCollection<CommandData>
     */
    public function execute(): DataCollection
    {
        $artisan = app(Application::class);

        /** @var array<string, Command> $commands */
        $commands = $artisan->all();

        /** @var Collection<int, CommandData> $commandDataCollection */
        $commandDataCollection = collect($commands)->map(function (Command $command): CommandData {
            $name = $command->getName() ?? '';
            $description = $command->getDescription();
            $signature = method_exists($command, 'getSignature') ? $command->getSignature() : $name;

            /** @var Collection<int, array{name: string, description: string, required: bool}> $arguments */
            $arguments = collect($command->getDefinition()->getArguments())
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
                ->map(fn($argument) => [
                    'name' => $argument->getName(),
                    'description' => $argument->getDescription(),
                    'required' => $argument->isRequired(),
                ])
                ->values();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)

            /** @var Collection<int, array{name: string, description: string, required: bool}> $options */
            $options = collect($command->getDefinition()->getOptions())
                ->map(fn($option) => [
                    'name' => $option->getName(),
                    'description' => $option->getDescription(),
                    'required' => $option->isValueRequired(),
                ])
                ->values();
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                ->map(function ($argument) {
                    return [
                        'name' => $argument->getName(),
                        'description' => $argument->getDescription(),
                        'required' => $argument->isRequired(),
                    ];
                })->values();

            /** @var Collection<int, array{name: string, description: string, required: bool}> $options */
            $options = collect($command->getDefinition()->getOptions())
                ->map(function ($option) {
                    return [
                        'name' => $option->getName(),
                        'description' => $option->getDescription(),
                        'required' => $option->isValueRequired(),
                    ];
                })->values();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            /** @var Collection<int, array{name: string, description: string, required: bool}> $options */
            $options = collect($command->getDefinition()->getOptions())
                ->map(fn($option) => [
                    'name' => $option->getName(),
                    'description' => $option->getDescription(),
                    'required' => $option->isValueRequired(),
                ])
                ->values();
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

            return new CommandData(
                name: $name,
                description: $description,
                signature: $signature,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
                full_name: $name . ' - ' . $description,
                arguments: $arguments->toArray(),
                options: [
                    'withValue' => $options->toArray(),
                ],
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                full_name: $name.' - '.$description,
                arguments: $arguments->toArray(),
                options: [
                    'withValue' => $options->toArray(),
                ]
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                full_name: $name . ' - ' . $description,
                arguments: $arguments->toArray(),
                options: [
                    'withValue' => $options->toArray(),
                ],
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            );
        });

        return new DataCollection(CommandData::class, $commandDataCollection->values()->all());
    }
}
