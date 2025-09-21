<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Override;
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
>>>>>>> 548bbd3 (.)
use Modules\Job\Database\Factories\FailedJobFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;

/**
 * Modules\Job\Models\FailedJob.
 *
 * @method static FailedJobFactory factory($count = null, $state = [])
 * @method static Builder|FailedJob newModelQuery()
 * @method static Builder|FailedJob newQuery()
 * @method static Builder|FailedJob query()
<<<<<<< HEAD
=======
=======
/**
 * Modules\Job\Models\FailedJob.
 *
 * @method static \Modules\Job\Database\Factories\FailedJobFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob query()
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property int $id
 * @property string $uuid
 * @property string $connection
 * @property string $queue
 * @property array $payload
 * @property string $exception
 * @property string $failed_at
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @method static Builder|FailedJob whereConnection($value)
 * @method static Builder|FailedJob whereException($value)
 * @method static Builder|FailedJob whereFailedAt($value)
 * @method static Builder|FailedJob whereId($value)
 * @method static Builder|FailedJob wherePayload($value)
 * @method static Builder|FailedJob whereQueue($value)
 * @method static Builder|FailedJob whereUuid($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereUuid($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperFailedJob
 * @mixin \Eloquent
 */
class FailedJob extends BaseModel
{
    protected $fillable = [
        'id',
        'uuid',
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at',
    ];

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
            'payload' => 'array',
        ];
    }
}
