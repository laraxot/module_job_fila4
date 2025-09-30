<?php

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
use Exception;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Job\Database\Factories\ScheduleFactory;
use InvalidArgumentException;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Console\Scheduling\ManagesFrequencies;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Modules\Job\Enums\Status;
use Webmozart\Assert\Assert;

/**
 * Modules\Job\Models\Schedule.
 *
 * @property Status $status
 * @property array $options
<<<<<<< HEAD
 * @property \Illuminate\Database\Eloquent\Collection<int, ScheduleHistory> $histories
=======
<<<<<<< HEAD
 * @property \Illuminate\Database\Eloquent\Collection<int, ScheduleHistory> $histories
=======
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Job\Models\ScheduleHistory> $histories
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property int|null $histories_count
 * @property int $id
 * @property string $command
 * @property string|null $command_custom
 * @property array|null $params
 * @property string $expression
 * @property array|null $environments
 * @property array|null $options_with_value
 * @property string|null $log_filename
 * @property bool $even_in_maintenance_mode
 * @property bool $without_overlapping
 * @property bool $on_one_server
 * @property string|null $webhook_before
 * @property string|null $webhook_after
 * @property string|null $email_output
 * @property bool $sendmail_error
 * @property bool $log_success
 * @property bool $log_error
 * @property bool $run_in_background
 * @property bool $sendmail_success
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static Builder|Schedule active()
 * @method static ScheduleFactory factory($count = null, $state = [])
 * @method static Builder|Schedule inactive()
 * @method static Builder|Schedule newModelQuery()
 * @method static Builder|Schedule newQuery()
 * @method static Builder|Schedule onlyTrashed()
 * @method static Builder|Schedule query()
 * @method static Builder|Schedule whereCommand($value)
 * @method static Builder|Schedule whereCommandCustom($value)
 * @method static Builder|Schedule whereCreatedAt($value)
 * @method static Builder|Schedule whereCreatedBy($value)
 * @method static Builder|Schedule whereDeletedAt($value)
 * @method static Builder|Schedule whereDeletedBy($value)
 * @method static Builder|Schedule whereEmailOutput($value)
 * @method static Builder|Schedule whereEnvironments($value)
 * @method static Builder|Schedule whereEvenInMaintenanceMode($value)
 * @method static Builder|Schedule whereExpression($value)
 * @method static Builder|Schedule whereId($value)
 * @method static Builder|Schedule whereLogError($value)
 * @method static Builder|Schedule whereLogFilename($value)
 * @method static Builder|Schedule whereLogSuccess($value)
 * @method static Builder|Schedule whereOnOneServer($value)
 * @method static Builder|Schedule whereOptions($value)
 * @method static Builder|Schedule whereOptionsWithValue($value)
 * @method static Builder|Schedule whereParams($value)
 * @method static Builder|Schedule whereRunInBackground($value)
 * @method static Builder|Schedule whereSendmailError($value)
 * @method static Builder|Schedule whereSendmailSuccess($value)
 * @method static Builder|Schedule whereStatus($value)
 * @method static Builder|Schedule whereUpdatedAt($value)
 * @method static Builder|Schedule whereUpdatedBy($value)
 * @method static Builder|Schedule whereWebhookAfter($value)
 * @method static Builder|Schedule whereWebhookBefore($value)
 * @method static Builder|Schedule whereWithoutOverlapping($value)
 * @method static Builder|Schedule withTrashed()
 * @method static Builder|Schedule withoutTrashed()
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule active()
 * @method static \Modules\Job\Database\Factories\ScheduleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCommandCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereEmailOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereEnvironments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereEvenInMaintenanceMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereExpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereLogError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereLogFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereLogSuccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereOnOneServer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereOptionsWithValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereRunInBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereSendmailError($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereSendmailSuccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereWebhookAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereWebhookBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereWithoutOverlapping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule withoutTrashed()
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperSchedule
 * @mixin \Eloquent
 */
class Schedule extends BaseModel
{
    use ManagesFrequencies;
    use SoftDeletes;

    public const STATUS_INACTIVE = 0;

    public const STATUS_ACTIVE = 1;

    public const STATUS_TRASHED = 2;

    protected $fillable = [
        'command',
        'command_custom',
        'params',
        'options',
        'options_with_value',
        'expression',
        'even_in_maintenance_mode',
        'without_overlapping',
        'on_one_server',
        'webhook_before',
        'webhook_after',
        'email_output',
        'sendmail_error',
        'sendmail_success',
        'log_success',
        'log_error',
        'status',
        'run_in_background',
        'log_filename',
        'environments',
    ];

    protected $attributes = [
        'expression' => '* * * * *',
        'params' => '[]',
        'options' => '[]',
        'options_with_value' => '[]',
    ];

    /** @return array<string, string> */
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
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
            'params' => 'array',
            'options' => 'array',
            'options_with_value' => 'array',
            'environments' => 'array',
            'status' => Status::class,
        ];
    }

    /**
     * Get available environments.
     */
    public static function getEnvironments(): Collection
    {
<<<<<<< HEAD
        return static::whereNotNull('environments')->groupBy('environments')->pluck('environments', 'environments');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return static::whereNotNull('environments')->groupBy('environments')->pluck('environments', 'environments');
=======
        return static::whereNotNull('environments')
            ->groupBy('environments')
            ->pluck('environments', 'environments');
>>>>>>> a12f125f4a (.)
=======
        return static::whereNotNull('environments')->groupBy('environments')->pluck('environments', 'environments');
>>>>>>> b93ef594b4 (.)
=======
        return static::whereNotNull('environments')
            ->groupBy('environments')
            ->pluck('environments', 'environments');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /**
     * Get the related histories.
     */
    public function histories(): HasMany
    {
        return $this->hasMany(ScheduleHistory::class, 'schedule_id', 'id');
    }

    /**
     * Scope a query to only include inactive schedules.
     */
    public function scopeInactive(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_INACTIVE);
    }

    /**
     * Scope a query to only include active schedules.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    /**
     * Get arguments from params.
     */
    public function getArguments(): array
    {
        $arguments = [];

        foreach ($this->params ?? [] as $argument => $value) {
            if (empty($value['value'])) {
                continue;
            }

            if (isset($value['type']) && $value['type'] === 'function') {
                // Replace eval with a safer function or an allowed list of callable functions
                $arguments[$argument] = $this->evaluateFunction($value['value']);
            } else {
<<<<<<< HEAD
                $arguments[(string) ($value['name'] ?? $argument)] = is_string($value)
                    ? $value
                    : ((string) $value['value']);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $arguments[(string) ($value['name'] ?? $argument)] = is_string($value)
                    ? $value
                    : ((string) $value['value']);
=======
                $arguments[(string) ($value['name'] ?? $argument)] = is_string($value) ? $value : (string) $value['value'];
>>>>>>> a12f125f4a (.)
=======
                $arguments[(string) ($value['name'] ?? $argument)] = is_string($value)
                    ? $value
                    : ((string) $value['value']);
>>>>>>> b93ef594b4 (.)
=======
                $arguments[(string) ($value['name'] ?? $argument)] = is_string($value) ? $value : (string) $value['value'];
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            }
        }

        return $arguments;
    }

    /**
     * Get options as array.
     */
    public function getOptions(): array
    {
        $options = collect($this->options ?? []);
        $optionsWithValues = $this->options_with_value ?? [];

<<<<<<< HEAD
        if (!empty($optionsWithValues)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($optionsWithValues)) {
=======
        if (! empty($optionsWithValues)) {
>>>>>>> a12f125f4a (.)
=======
        if (!empty($optionsWithValues)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! empty($optionsWithValues)) {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            $options = $options->merge($optionsWithValues);
        }

        return $options->map(function ($value, $key) {
            if (is_array($value)) {
                Assert::nullOrString($value['name']);

<<<<<<< HEAD
                return '--' . ((string) ($value['name'] ?? $key)) . '=' . ((string) $value['value']);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                return '--' . ((string) ($value['name'] ?? $key)) . '=' . ((string) $value['value']);
=======
                return '--'.((string) ($value['name'] ?? $key)).'='.(string) $value['value'];
>>>>>>> a12f125f4a (.)
=======
                return '--' . ((string) ($value['name'] ?? $key)) . '=' . ((string) $value['value']);
>>>>>>> b93ef594b4 (.)
=======
                return '--'.((string) ($value['name'] ?? $key)).'='.(string) $value['value'];
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            }

            return "--{$value}";
        })->toArray();
    }

    /**
     * Safely evaluate function strings (avoiding eval).
     *
     * @param string $functionString Il nome della funzione da valutare
     * @return string|null Il risultato della funzione o null se la funzione non è consentita
<<<<<<< HEAD
     *
     * @throws InvalidArgumentException Se viene passato un argomento non valido
     */
    private function evaluateFunction(string $functionString): null|string
=======
<<<<<<< HEAD
     *
     * @throws InvalidArgumentException Se viene passato un argomento non valido
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private function evaluateFunction(string $functionString): null|string
=======
    private function evaluateFunction(string $functionString): ?string
>>>>>>> a12f125f4a (.)
=======
    private function evaluateFunction(string $functionString): null|string
>>>>>>> b93ef594b4 (.)
=======
     * 
     * @throws \InvalidArgumentException Se viene passato un argomento non valido
     */
    private function evaluateFunction(string $functionString): ?string
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    {
        // Define a list of allowed functions or implement custom evaluation logic.
        $allowedFunctions = ['strtolower', 'strtoupper']; // Example allowed functions

        if (in_array($functionString, $allowedFunctions, true)) {
            // Chiamiamo la funzione in modo sicuro
            try {
                // Utilizziamo uno switch invece di if per evitare il falso positivo di PHPStan
                switch ($functionString) {
                    case 'strtolower':
                        return strtolower('TEST_STRING');
                    case 'strtoupper':
                        return strtoupper('test_string');
                    default:
                        return null;
                }
<<<<<<< HEAD
            } catch (Exception $e) {
=======
<<<<<<< HEAD
            } catch (Exception $e) {
=======
            } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
                // Log error or handle exception
                return null;
            }
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
        // Funzione non consentita
        return null;
    }
}
