<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Schedule;

use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Modules\Job\Actions\ExecuteTaskAction;
use Modules\Job\Models\Task;
use Modules\Xot\Actions\GetViewAction;
use Symfony\Component\Console\Command\Command;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Livewire\Component;
use Modules\Job\Models\Task;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Modules\Xot\Actions\GetViewAction;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Actions\ExecuteTaskAction;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Modules\Job\Actions\ExecuteTaskAction;
use Modules\Job\Models\Task;
use Modules\Xot\Actions\GetViewAction;
use Symfony\Component\Console\Command\Command;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Livewire\Component;
use Modules\Job\Models\Task;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Modules\Xot\Actions\GetViewAction;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Actions\ExecuteTaskAction;
use Illuminate\Contracts\Support\Renderable;
use Symfony\Component\Console\Command\Command;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

/**
 * Class Schedule\Crud.
 */
class Crud extends Component
{
    public bool $create = false;

    /**
     * Return available frequencies.
     */
    public static function getFrequencies(): array
    {
        $res = config('totem.frequencies');
        if (is_array($res)) {
            return $res;
        }

<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> a12f125f4a (.)
=======
        throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> b93ef594b4 (.)
=======
        throw new Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();
        $tasks = Task::paginate(20);
        $view_params = [
            'tasks' => $tasks,
            /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
             * 'task' => new Task(),
             * 'commands' => $this->getCommands(),
             * 'timezones' => timezone_identifiers_list(),
             * 'frequencies' => $this->getFrequencies(),
             */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            'task' => new Task(),
            'commands' => $this->getCommands(),
            'timezones' => timezone_identifiers_list(),
            'frequencies' => $this->getFrequencies(),
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        ];

        return view($view, $view_params);
    }

    public function taskCreate(): void
    {
        $this->dispatch('modal.open', 'modal.schedule.create');
    }

    /**
     * Return collection of Artisan commands filtered if needed.
     */
    public function getCommands(): Collection
    {
        config('totem.artisan.command_filter');
        config('totem.artisan.whitelist', true);
        $all_commands = collect(Artisan::all());

        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
         * if (! empty($command_filter)) {
         * // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
         * $all_commands = $all_commands->filter(
         * function ($command) use ($command_filter, $whitelist) {
         * foreach ($command_filter as $filter) {
         * if (fnmatch($filter, $command->getName())) {
         * return $whitelist;
         * }U/Notifications/VerifyEmail.php
         * }
         *
         * return ! $whitelist;
         * }
         * );
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)

        return $all_commands->sortBy(static function (Command $command): string {
            Assert::string($name = $command->getName());
            if (mb_strpos($name, ':') === false) {
                return ':' . $name;
            }

            return $name;
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (! empty($command_filter)) {
            // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
            $all_commands = $all_commands->filter(
                function ($command) use ($command_filter, $whitelist) {
                    foreach ($command_filter as $filter) {
                        if (fnmatch($filter, $command->getName())) {
                            return $whitelist;
                        }U/Notifications/VerifyEmail.php
                    }
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        return $all_commands->sortBy(static function (Command $command): string {
            Assert::string($name = $command->getName());
            if (mb_strpos($name, ':') === false) {
                return ':' . $name;
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======

            return $name;
        });
>>>>>>> b93ef594b4 (.)
=======

                    return ! $whitelist;
                }
            );
        }
        */

        return $all_commands->sortBy(
            static function (Command $command): string {
                Assert::string($name = $command->getName());
                if (mb_strpos($name, ':') === false) {
                    return ':'.$name;
                }

                return $name;
            }
        );
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    public function executeTask(string $task_id): void
    {
        app(ExecuteTaskAction::class)->execute($task_id);

<<<<<<< HEAD
        session()->flash('message', 'task [' . $task_id . '] executed at ' . now());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        session()->flash('message', 'task [' . $task_id . '] executed at ' . now());
=======
        session()->flash('message', 'task ['.$task_id.'] executed at '.now());
>>>>>>> a12f125f4a (.)
=======
        session()->flash('message', 'task [' . $task_id . '] executed at ' . now());
>>>>>>> b93ef594b4 (.)
=======
        session()->flash('message', 'task ['.$task_id.'] executed at '.now());
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
