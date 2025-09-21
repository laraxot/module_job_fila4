<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Override;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Job\Database\Factories\ResultFactory;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Contracts\ProfileContract;
use Modules\Job\Database\Factories\ResultFactory;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Modules\Job\Models\Result.
 *
 * @property int $id
 * @property int $task_id
 * @property Carbon $ran_at
 * @property string $duration
 * @property string $result
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Task|null $task
 * @method static \Illuminate\Database\Eloquent\Builder|Result newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result query()
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereRanAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUpdatedBy($value)
<<<<<<< HEAD
 * @property ProfileContract|null $creator
 * @mixin IdeHelperResult
 * @property-read ProfileContract|null $updater
 * @method static ResultFactory factory($count = null, $state = [])
=======
<<<<<<< HEAD
 * @property ProfileContract|null $creator
 * @mixin IdeHelperResult
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read ProfileContract|null $updater
=======
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
>>>>>>> a12f125f4a (.)
=======
 * @property-read ProfileContract|null $updater
>>>>>>> b93ef594b4 (.)
 * @method static ResultFactory factory($count = null, $state = [])
=======
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @mixin IdeHelperResult
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
 * @method static \Modules\Job\Database\Factories\ResultFactory factory($count = null, $state = [])
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin \Eloquent
 */
class Result extends BaseModel
{
    protected $fillable = [
        'duration',
        'result',
        'task_id',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function getLastRun(): Builder
    {
        return $this->select('ran_at')
            // ->whereColumn('task_id', TOTEM_TABLE_PREFIX.'tasks.id')
            ->whereColumn('task_id', 'tasks.id')
            ->latest()
            ->limit(1)
            ->getQuery();
    }

    public function getAverageRunTime(): Builder
    {
        return $this->select(DB::raw('avg(duration)'))
            // ->whereColumn('task_id', TOTEM_TABLE_PREFIX.'tasks.id')
            ->whereColumn('task_id', 'tasks.id')
            ->getQuery();
    }

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
<<<<<<< HEAD
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======
=======
>>>>>>> origin/develop

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            'ran_at' => 'datetime',
        ];
    }
}
