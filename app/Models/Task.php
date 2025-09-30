<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Collection;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Builder;
use function Safe\json_decode;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Collection;
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\DatabaseNotification;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Database\Eloquent\Collection;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Builder;
use function Safe\json_decode;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Modules\Job\Models\Traits\FrontendSortable;
use Webmozart\Assert\Assert;

/**
 * Modules\Job\Models\Task.
 *
 * @property string $id
 * @property string $description
 * @property string $command
 * @property string|null $parameters
 * @property string|null $expression
 * @property string $timezone
 * @property int $is_active
 * @property int $dont_overlap
 * @property int $run_in_maintenance
 * @property string|null $notification_email_address
 * @property string|null $notification_phone_number
 * @property string $notification_slack_webhook
 * @property int $auto_cleanup_num
 * @property string|null $auto_cleanup_type
 * @property int $run_on_one_server
 * @property int $run_in_background
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property int $order_column
 * @property string $status
 * @property string $priority_id
 *                               property-read \Modules\Xot\Contracts\ProfileContract|null $creator
<<<<<<< HEAD
 * @property Collection<int, Frequency> $frequencies
=======
<<<<<<< HEAD
 * @property Collection<int, Frequency> $frequencies
=======
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Job\Models\Frequency> $frequencies
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property int|null $frequencies_count
 * @property bool $activated
 * @property float $average_runtime
 * @property Result|null $last_result
 * @property string $upcoming
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property int|null $notifications_count
 * @property Collection<int, Result> $results
 * @property int|null $results_count
 * @property ProfileContract|null $updater
 * @method static Builder<static>|Task newModelQuery()
 * @method static Builder<static>|Task newQuery()
 * @method static Builder<static>|Task query()
 * @method static Builder<static>|Task sortableBy(array $sortableColumns, array $defaultSort = [])
 * @method static Builder<static>|Task whereAutoCleanupNum($value)
 * @method static Builder<static>|Task whereAutoCleanupType($value)
 * @method static Builder<static>|Task whereCommand($value)
 * @method static Builder<static>|Task whereCreatedAt($value)
 * @method static Builder<static>|Task whereCreatedBy($value)
 * @method static Builder<static>|Task whereDeletedAt($value)
 * @method static Builder<static>|Task whereDeletedBy($value)
 * @method static Builder<static>|Task whereDescription($value)
 * @method static Builder<static>|Task whereDontOverlap($value)
 * @method static Builder<static>|Task whereExpression($value)
 * @method static Builder<static>|Task whereId($value)
 * @method static Builder<static>|Task whereIsActive($value)
 * @method static Builder<static>|Task whereNotificationEmailAddress($value)
 * @method static Builder<static>|Task whereNotificationPhoneNumber($value)
 * @method static Builder<static>|Task whereNotificationSlackWebhook($value)
 * @method static Builder<static>|Task whereOrderColumn($value)
 * @method static Builder<static>|Task whereParameters($value)
 * @method static Builder<static>|Task wherePriorityId($value)
 * @method static Builder<static>|Task whereRunInBackground($value)
 * @method static Builder<static>|Task whereRunInMaintenance($value)
 * @method static Builder<static>|Task whereRunOnOneServer($value)
 * @method static Builder<static>|Task whereStatus($value)
 * @method static Builder<static>|Task whereTimezone($value)
 * @method static Builder<static>|Task whereUpdatedAt($value)
 * @method static Builder<static>|Task whereUpdatedBy($value)
 * @property-read ProfileContract|null $creator
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property int|null $notifications_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Job\Models\Result> $results
 * @property int|null $results_count
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task sortableBy(array $sortableColumns, array $defaultSort = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereAutoCleanupNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereAutoCleanupType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDontOverlap($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereExpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereNotificationEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereNotificationPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereNotificationSlackWebhook($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task wherePriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereRunInBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereRunInMaintenance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereRunOnOneServer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereUpdatedBy($value)
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperTask
 * @mixin \Eloquent
 */
class Task extends BaseModel
{
    // use HasFrequencies;
    use FrontendSortable;
    use HasFactory;
    use Notifiable;

    /**
     * Compila i parametri del task per l'esecuzione.
     *
     * @param bool $forScheduler Se true, i parametri vengono formattati per lo scheduler
     * @return array<int, string>|string
     */
    public function compileParameters(bool $forScheduler = false): array|string
    {
        if (null === $this->parameters) {
            return [];
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
        $parameters = json_decode($this->parameters, true);
        Assert::isArray($parameters);

        if ($forScheduler) {
<<<<<<< HEAD
            return array_map(fn($value) => is_bool($value) ? ($value ? '1' : '0') : ((string) $value), $parameters);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return array_map(fn($value) => is_bool($value) ? ($value ? '1' : '0') : ((string) $value), $parameters);
=======
            return array_map(fn ($value) => is_bool($value) ? ($value ? '1' : '0') : (string) $value, $parameters);
>>>>>>> a12f125f4a (.)
=======
            return array_map(fn($value) => is_bool($value) ? ($value ? '1' : '0') : ((string) $value), $parameters);
>>>>>>> b93ef594b4 (.)
=======
        $parameters = \Safe\json_decode($this->parameters, true);
        Assert::isArray($parameters);

        if ($forScheduler) {
            return array_map(fn ($value) => is_bool($value) ? ($value ? '1' : '0') : (string) $value, $parameters);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        }

        return $parameters;
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    protected $fillable = [
        'id',
        'description',
        'command',
        'parameters',
        'expression',
        'timezone',
        'is_active',
        'dont_overlap',
        'run_in_maintenance',
        'notification_email_address',
        'notification_phone_number',
        'notification_slack_webhook',
        'auto_cleanup_type',
        'auto_cleanup_num',
        'run_on_one_server',
        'run_in_background',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    /** @var list<string> */
    protected $appends = [
        'activated',
        'upcoming',
        'last_result',
        'average_runtime',
    ];

    /**
     * Activated Accessor.
     */
    public function getActivatedAttribute(): bool
    {
        return (bool) $this->is_active;
    }

    /**
     * Upcoming Accessor.
     *
     * throws \Exception
     */
    public function getUpcomingAttribute(): string
    {
        // return CronExpression::factory($this->getCronExpression())->getNextRunDate()->format('Y-m-d H:i:s');
        return 'preso';
    }

    /**
     * Frequencies Relation.
     */
    public function frequencies(): HasMany
    {
        return $this->hasMany(Frequency::class, 'task_id', 'id')->with('parameters');
    }

    /**
     * Results Relation.
     */
    public function results(): HasMany
    {
        return $this->hasMany(Result::class, 'task_id', 'id');
    }

    /**
     * Returns the most recent result entry for this task.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
    public function getLastResultAttribute(): null|Result
    {
        $res = $this->results()->orderBy('id', 'desc')->first();
        if ($res === null) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function getLastResultAttribute(): ?Result
    {
        $res = $this->results()->orderBy('id', 'desc')->first();
        if ($res == null) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function getLastResultAttribute(): null|Result
    {
        $res = $this->results()->orderBy('id', 'desc')->first();
        if ($res === null) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            return null;
        }
        Assert::isInstanceOf($res, Result::class);

        return $res;
    }

    public function getAverageRuntimeAttribute(): float
    {
        /**
         * @var float $avg_duration
         */
        $avg_duration = $this->results()->avg('duration');

        return (float) $avg_duration;
    }

    /**
     * Route notifications for the mail channel.
     */
<<<<<<< HEAD
    public function routeNotificationForMail(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function routeNotificationForMail(): null|string
=======
    public function routeNotificationForMail(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function routeNotificationForMail(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function routeNotificationForMail(): ?string
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    {
        return $this->notification_email_address;
    }

    /**
     * Route notifications for the Nexmo channel.
     */
<<<<<<< HEAD
    public function routeNotificationForNexmo(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function routeNotificationForNexmo(): null|string
=======
    public function routeNotificationForNexmo(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function routeNotificationForNexmo(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function routeNotificationForNexmo(): ?string
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    {
        return $this->notification_phone_number;
    }

    /**
     * Route notifications for the Slack channel.
     */
<<<<<<< HEAD
    public function routeNotificationForSlack(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function routeNotificationForSlack(): null|string
=======
    public function routeNotificationForSlack(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function routeNotificationForSlack(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function routeNotificationForSlack(): ?string
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    {
        return $this->notification_slack_webhook;
    }

    /**
     * Attempt to perform clean on task results.
     */
    public function autoCleanup(): void
    {
        if ($this->auto_cleanup_num > 0) {
            if ($this->auto_cleanup_type === 'results') {
                $oldest_id = $this->results()
                    ->orderBy('ran_at', 'desc')
                    ->limit($this->auto_cleanup_num)
                    ->get()
                    ->min('id');
                do {
                    $rowsToDelete = $this->results()
                        ->where('id', '<', $oldest_id)
                        ->limit(50)
                        ->getQuery()
                        ->select('id')
                        ->pluck('id');

<<<<<<< HEAD
                    Result::query()->whereIn('id', $rowsToDelete)->delete();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    Result::query()->whereIn('id', $rowsToDelete)->delete();
=======
                    Result::query()
                        ->whereIn('id', $rowsToDelete)
                        ->delete();
>>>>>>> a12f125f4a (.)
=======
                    Result::query()->whereIn('id', $rowsToDelete)->delete();
>>>>>>> b93ef594b4 (.)
=======
                    Result::query()
                        ->whereIn('id', $rowsToDelete)
                        ->delete();
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                } while ($rowsToDelete->count() > 0);
            } else {
                do {
                    $rowsToDelete = $this->results()
                        ->where('ran_at', '<', Carbon::now()->subDays($this->auto_cleanup_num - 1))
                        ->limit(50)
                        ->getQuery()
                        ->select('id')
                        ->pluck('id');

<<<<<<< HEAD
                    Result::query()->whereIn('id', $rowsToDelete)->delete();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    Result::query()->whereIn('id', $rowsToDelete)->delete();
=======
                    Result::query()
                        ->whereIn('id', $rowsToDelete)
                        ->delete();
>>>>>>> a12f125f4a (.)
=======
                    Result::query()->whereIn('id', $rowsToDelete)->delete();
>>>>>>> b93ef594b4 (.)
=======
                    Result::query()
                        ->whereIn('id', $rowsToDelete)
                        ->delete();
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                } while ($rowsToDelete->count() > 0);
            }
        }
    }
}
