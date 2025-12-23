<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Job\Models\Task;

/**
<<<<<<< HEAD
 * @extends Factory<Task>
=======
<<<<<<< HEAD
 * @extends Factory<Task>
=======
<<<<<<< HEAD
 * @extends Factory<Task>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Job\Models\Task>
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'description' => fake()->sentence,
            'command' => 'Modules\Job\Console\Commands\ListSchedule',
            'expression' => '* * * * *',
        ];
    }
}
