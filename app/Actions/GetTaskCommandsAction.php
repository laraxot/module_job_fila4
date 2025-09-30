<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Console\Command\Command;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

class GetTaskCommandsAction
{
    use QueueableAction;

    public function execute(): Collection
    {
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
         * $command_filter = config('totem.artisan.command_filter');
         * $whitelist = config('totem.artisan.whitelist', true);
         *
         * if (! empty($command_filter)) {
         * // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
         * $all_commands = $all_commands->filter(function ($command) use ($command_filter, $whitelist) {
         * foreach ($command_filter as $filter) {
         * if (fnmatch($filter, $command->getName())) {
         * return $whitelist;
         * }
         * }
         *
         * return ! $whitelist;
         * });
         * }
         */
        return $all_commands->sortBy(static function (Command $command): string {
            $name = $command->getName();
            Assert::string($name, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            if (mb_strpos($name, ':') === false) {
                return ':' . $name;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
            }

            return $name;
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $command_filter = config('totem.artisan.command_filter');
        $whitelist = config('totem.artisan.whitelist', true);

        if (! empty($command_filter)) {
            // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
            $all_commands = $all_commands->filter(function ($command) use ($command_filter, $whitelist) {
                foreach ($command_filter as $filter) {
                    if (fnmatch($filter, $command->getName())) {
                        return $whitelist;
                    }
                }

                return ! $whitelist;
            });
        }
        */
        return $all_commands->sortBy(
            static function (Command $command): string {
                $name = $command->getName();
                Assert::string($name);
                if (mb_strpos($name, ':') === false) {
                    return ':'.$name;
                }

                return $name;
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            }

            return $name;
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
