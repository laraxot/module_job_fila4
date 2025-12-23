<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> laraxot/develop

/**
 * Class TaskComment.
 *
 * @property ProfileContract|null $creator
<<<<<<< HEAD
 * @property Task|null                                   $task
 * @property ProfileContract|null $updater
 * @property User|null                                   $user
=======
 * @property Task|null $task
 * @property ProfileContract|null $updater
 * @property User|null $user
>>>>>>> laraxot/develop
 *
 * @method static Builder<static>|TaskComment newModelQuery()
 * @method static Builder<static>|TaskComment newQuery()
 * @method static Builder<static>|TaskComment onlyTrashed()
 * @method static Builder<static>|TaskComment query()
 * @method static Builder<static>|TaskComment withTrashed(bool $withTrashed = true)
 * @method static Builder<static>|TaskComment withoutTrashed()
 *
<<<<<<< HEAD
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
 *
 * @method static \Modules\Job\Database\Factories\TaskCommentFactory factory($count = null, $state = [])
 *
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
class TaskComment extends BaseModel
{
    protected $table = 'task_comments';

    protected $fillable = [
        'task_id',
        'user_id',
        'comment',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
