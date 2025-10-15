<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Modules\Job\Models\Traits\FrontendSortable;
use Modules\Xot\Contracts\ProfileContract;
use Webmozart\Assert\Assert;

use function Safe\json_decode;

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
 * @property Collection<int, Frequency> $frequencies
 * @property int|null $frequencies_count
 * @property bool $activated
 * @property float $average_runtime
 * @property Result|null $last_result
 * @property string $upcoming
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property int|null $notifications_count
 * @property Collection<int, Result> $results
 * @property int|null $results_count
 * @property ProfileContract|null $updater
 *
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
 *
 * @property-read ProfileContract|null $creator
 *
 * @mixin \Eloquent
 */
/**
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read Collection<int, \Modules\Job\Models\Frequency> $frequencies
 * @property-read int|null $frequencies_count
 * @property-read bool $activated
 * @property-read float $average_runtime
 * @property-read \Modules\Job\Models\Result|null $last_result
 * @property-read string $upcoming
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, \Modules\Job\Models\Result> $results
 * @property-read int|null $results_count
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Modules\Job\Database\Factories\TaskFactory factory($count = null, $state = [])
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
 * @method static Builder<static>|Task whereParameters($value)
 * @method static Builder<static>|Task whereRunInBackground($value)
 * @method static Builder<static>|Task whereRunInMaintenance($value)
 * @method static Builder<static>|Task whereRunOnOneServer($value)
 * @method static Builder<static>|Task whereTimezone($value)
 * @method static Builder<static>|Task whereUpdatedAt($value)
 * @method static Builder<static>|Task whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Task extends BaseModel
{
    // use HasFrequencies;
    use FrontendSortable;
    use \Modules\Xot\Models\Traits\HasXotFactory;
    use Notifiable;

    /**
     * Compila i parametri del task per l'esecuzione.
     *
     * @param  bool  $forScheduler  Se true, i parametri vengono formattati per lo scheduler
     * @return array<int, string>|array<string, mixed>
     */
    public function compileParameters(bool $forScheduler = false): array
    {
        $parametersValue = $this->attributes['parameters'] ?? null;
        
        if ($parametersValue === null) {
            return [];
        }

        $parameters = json_decode((string) $parametersValue, true);
        Assert::isArray($parameters);

        if ($forScheduler) {
            return array_map(fn ($value) => is_bool($value) ? ($value ? '1' : '0') : ((string) $value), $parameters);
        }

        return $parameters;
    }

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
        $isActive = $this->attributes['is_active'] ?? 0;
        return (bool) $isActive;
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
    public function getLastResultAttribute(): ?Result
    {
        $res = $this->results()->orderBy('id', 'desc')->first();
        if ($res === null) {
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
    public function routeNotificationForMail(): ?string
    {
        $email = $this->attributes['notification_email_address'] ?? null;
        return is_string($email) ? $email : null;
    }

    /**
     * Route notifications for the Nexmo channel.
     */
    public function routeNotificationForNexmo(): ?string
    {
        $phone = $this->attributes['notification_phone_number'] ?? null;
        return is_string($phone) ? $phone : null;
    }

    /**
     * Route notifications for the Slack channel.
     */
    public function routeNotificationForSlack(): ?string
    {
        $webhook = $this->attributes['notification_slack_webhook'] ?? null;
        return is_string($webhook) ? $webhook : null;
    }

    /**
     * Attempt to perform clean on task results.
     */
    public function autoCleanup(): void
    {
        $cleanupNumValue = $this->attributes['auto_cleanup_num'] ?? 0;
        $autoCleanupNum = is_int($cleanupNumValue) ? $cleanupNumValue : (int) $cleanupNumValue;
        
        if ($autoCleanupNum > 0) {
            $cleanupTypeValue = $this->attributes['auto_cleanup_type'] ?? '';
            $autoCleanupType = is_string($cleanupTypeValue) ? $cleanupTypeValue : (string) $cleanupTypeValue;
            if ($autoCleanupType === 'results') {
                $oldest_id = $this->results()
                    ->orderBy('ran_at', 'desc')
                    ->limit($autoCleanupNum)
                    ->get()
                    ->min('id');
                do {
                    $rowsToDelete = $this->results()
                        ->where('id', '<', $oldest_id)
                        ->limit(50)
                        ->getQuery()
                        ->select('id')
                        ->pluck('id');

                    Result::query()->whereIn('id', $rowsToDelete)->delete();
                } while ($rowsToDelete->count() > 0);
            } else {
                do {
                    $rowsToDelete = $this->results()
                        ->where('ran_at', '<', Carbon::now()->subDays($autoCleanupNum - 1))
                        ->limit(50)
                        ->getQuery()
                        ->select('id')
                        ->pluck('id');

                    Result::query()->whereIn('id', $rowsToDelete)->delete();
                } while ($rowsToDelete->count() > 0);
            }
        }
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'description' => 'string',
            'command' => 'string',
            'parameters' => 'string',
            'expression' => 'string',
            'timezone' => 'string',
            'is_active' => 'integer',
            'dont_overlap' => 'integer',
            'run_in_maintenance' => 'integer',
            'notification_email_address' => 'string',
            'notification_phone_number' => 'string',
            'notification_slack_webhook' => 'string',
            'auto_cleanup_num' => 'integer',
            'auto_cleanup_type' => 'string',
            'run_on_one_server' => 'integer',
            'run_in_background' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'created_by' => 'string',
            'updated_by' => 'string',
            'deleted_by' => 'string',
            'order_column' => 'integer',
            'status' => 'string',
            'priority_id' => 'string',
        ];
    }
}
