<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Modules\User\Models\User;
use Carbon\Carbon;
=======
<<<<<<< HEAD
use Modules\User\Models\User;
use Carbon\Carbon;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Predict\Models\Profile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Xot\Traits\Updater;

/**
 * Class TaskComment.
 *
 * @property int $id
 * @property int $task_id
 * @property int $user_id
 * @property string $comment
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Task $task
 * @property-read User $user
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property-read Profile|null $creator
 * @property-read Profile|null $updater
 *
 * @method static Builder<static>|TaskComment newModelQuery()
 * @method static Builder<static>|TaskComment newQuery()
 * @method static Builder<static>|TaskComment onlyTrashed()
 * @method static Builder<static>|TaskComment query()
 * @method static Builder<static>|TaskComment withTrashed(bool $withTrashed = true)
 * @method static Builder<static>|TaskComment withoutTrashed()
 * @method static TaskComment|null first()
 * @method static Collection<int, TaskComment> get()
 * @method static TaskComment create(array $attributes = [])
 * @method static TaskComment firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|TaskComment where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|TaskComment whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin \Eloquent
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Modules\Job\Models\Task $task
 * @property-read \Modules\User\Models\User $user
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 */
class TaskComment extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Updater;

    protected $table = 'task_comments';

    protected $fillable = [
        'task_id',
        'user_id',
        'comment',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function user(): BelongsTo
    {
<<<<<<< HEAD
        return $this->belongsTo(User::class);
=======
<<<<<<< HEAD
        return $this->belongsTo(User::class);
=======
        return $this->belongsTo(\Modules\User\Models\User::class);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }
}
