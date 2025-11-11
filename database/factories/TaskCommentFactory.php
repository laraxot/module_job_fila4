<?php

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Job\Models\TaskComment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

