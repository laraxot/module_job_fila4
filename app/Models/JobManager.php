<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Override;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
use Modules\Job\Database\Factories\JobManagerFactory;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
use Modules\Job\Database\Factories\JobManagerFactory;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Contracts\Queue\Job as JobContract;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;

/**
 * Modules\Job\Models\JobManager.
 *
<<<<<<< HEAD
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
=======
<<<<<<< HEAD
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
=======
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property string $id
 * @property string $job_id
 * @property string|null $name
 * @property string|null $queue
<<<<<<< HEAD
 * @property Carbon|null $started_at
 * @property Carbon|null $finished_at
=======
<<<<<<< HEAD
 * @property Carbon|null $started_at
 * @property Carbon|null $finished_at
=======
 * @property \Illuminate\Support\Carbon|null $started_at
 * @property \Illuminate\Support\Carbon|null $finished_at
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property bool $failed
 * @property int $attempt
 * @property int|null $progress
 * @property string|null $exception_message
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $status
 * @method static JobManagerFactory factory($count = null, $state = [])
 * @method static Builder|JobManager newModelQuery()
 * @method static Builder|JobManager newQuery()
 * @method static Builder|JobManager query()
 * @method static Builder|JobManager whereAttempt($value)
 * @method static Builder|JobManager whereCreatedAt($value)
 * @method static Builder|JobManager whereExceptionMessage($value)
 * @method static Builder|JobManager whereFailed($value)
 * @method static Builder|JobManager whereFinishedAt($value)
 * @method static Builder|JobManager whereId($value)
 * @method static Builder|JobManager whereJobId($value)
 * @method static Builder|JobManager whereName($value)
 * @method static Builder|JobManager whereProgress($value)
 * @method static Builder|JobManager whereQueue($value)
 * @method static Builder|JobManager whereStartedAt($value)
 * @method static Builder|JobManager whereUpdatedAt($value)
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $status
 * @method static \Modules\Job\Database\Factories\JobManagerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereAttempt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereExceptionMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereFailed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereFinishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobManager whereUpdatedAt($value)
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperJobManager
 * @mixin \Eloquent
 */
class JobManager extends BaseModel
{
    // use HasFactory, Prunable;

    // protected $table = 'job_manager';

    protected $fillable = [
        'job_id',
        'name',
        'queue',
        'started_at',
        'finished_at',
        'failed',
        'attempt',
        'progress',
        'exception_message',
    ];

    public static function getJobId(JobContract $job): string|int
    {
        if ($jobId = $job->getJobId()) {
            return $jobId;
        }

        return Hash::make($job->getRawBody());
    }

    public function status(): Attribute
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        return Attribute::make(get: function (): string {
            if ($this->isFinished()) {
                return $this->failed ? 'failed' : 'succeeded';
            }
<<<<<<< HEAD

            return 'running';
        });
=======
<<<<<<< HEAD

            return 'running';
        });
=======
=======
>>>>>>> origin/develop
        return Attribute::make(
            get: function (): string {
                if ($this->isFinished()) {
                    return $this->failed ? 'failed' : 'succeeded';
                }

                return 'running';
            },
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            return 'running';
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    public function isFinished(): bool
    {
        if ($this->hasFailed()) {
            return true;
        }

        return $this->finished_at !== null;
    }

    public function hasFailed(): bool
    {
        return $this->failed;
    }

    public function hasSucceeded(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
        if (!$this->isFinished()) {
            return false;
        }

        return !$this->hasFailed();
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if (! $this->isFinished()) {
            return false;
        }

        return ! $this->hasFailed();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!$this->isFinished()) {
            return false;
        }

        return !$this->hasFailed();
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
    }

    public function prunable(): Builder
    {
        if (config('jobs.pruning.activate')) {
            $retention_days = config('jobs.pruning.retention_days');
<<<<<<< HEAD
            if (!is_int($retention_days)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_int($retention_days)) {
=======
            if (! is_int($retention_days)) {
>>>>>>> a12f125f4a (.)
=======
            if (!is_int($retention_days)) {
>>>>>>> b93ef594b4 (.)
=======
    }

    public function prunable(): \Illuminate\Database\Eloquent\Builder
    {
        if (config('jobs.pruning.activate')) {
            $retention_days = config('jobs.pruning.retention_days');
            if (! is_int($retention_days)) {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                $retention_days = 365;
            }

            return static::where('created_at', '<=', now()->subDays($retention_days));
        }

        return static::query();
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
            'failed' => 'bool',
            'started_at' => 'datetime',
            'finished_at' => 'datetime',
        ];
    }
}
