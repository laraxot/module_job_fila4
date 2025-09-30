<?php

/**
 * @see https://github.com/mooxphp/jobs/tree/main
 */

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
use Illuminate\Support\Carbon;
use Modules\Job\Database\Factories\JobsWaitingFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;

<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
/**
 * Modules\Job\Models\JobsWaiting.
 *
 * @property int $id
 * @property string $queue
 * @property array $payload
 * @property int $attempts
 * @property int|null $reserved_at
 * @property int $available_at
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @property Carbon $created_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $updated_at
 * @property mixed $display_name
 * @method static JobsWaitingFactory factory($count = null, $state = [])
 * @method static Builder|JobsWaiting newModelQuery()
 * @method static Builder|JobsWaiting newQuery()
 * @method static Builder|JobsWaiting query()
 * @method static Builder|JobsWaiting whereAttempts($value)
 * @method static Builder|JobsWaiting whereAvailableAt($value)
 * @method static Builder|JobsWaiting whereCreatedAt($value)
 * @method static Builder|JobsWaiting whereCreatedBy($value)
 * @method static Builder|JobsWaiting whereId($value)
 * @method static Builder|JobsWaiting wherePayload($value)
 * @method static Builder|JobsWaiting whereQueue($value)
 * @method static Builder|JobsWaiting whereReservedAt($value)
 * @method static Builder|JobsWaiting whereUpdatedAt($value)
 * @method static Builder|JobsWaiting whereUpdatedBy($value)
 * @property mixed $status
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperJobsWaiting
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class JobsWaiting extends Job
{
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
class JobsWaiting extends Job
{
}
=======
class JobsWaiting extends Job {}
>>>>>>> a12f125f4a (.)
=======
class JobsWaiting extends Job
{
}
>>>>>>> b93ef594b4 (.)
=======
 * @property \Illuminate\Support\Carbon $created_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $display_name
 * @method static \Modules\Job\Database\Factories\JobsWaitingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereAvailableAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereReservedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsWaiting whereUpdatedBy($value)
 * @property mixed $status
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @mixin IdeHelperJobsWaiting
 * @mixin \Eloquent
 */
class JobsWaiting extends Job {}
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
