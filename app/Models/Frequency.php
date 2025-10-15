<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Modules\Job\Database\Factories\FrequencyFactory;
use Modules\Xot\Contracts\ProfileContract;

// use Modules\Job\Models\Traits\HasParameters;
/**
 * Modules\Job\Models\Frequency.
 *
 * @property int $id
 * @property int $task_id
 * @property string $label
 * @property string $interval
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection<int, Parameter> $parameters
 * @property int|null $parameters_count
 * @property Task|null $task
 *
 * @method static FrequencyFactory factory($count = null, $state = [])
 * @method static Builder|Frequency newModelQuery()
 * @method static Builder|Frequency newQuery()
 * @method static Builder|Frequency query()
 * @method static Builder|Frequency whereCreatedAt($value)
 * @method static Builder|Frequency whereCreatedBy($value)
 * @method static Builder|Frequency whereId($value)
 * @method static Builder|Frequency whereInterval($value)
 * @method static Builder|Frequency whereLabel($value)
 * @method static Builder|Frequency whereTaskId($value)
 * @method static Builder|Frequency whereUpdatedAt($value)
 * @method static Builder|Frequency whereUpdatedBy($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $task_id
 * @property string $label
 * @property string $interval
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read Collection<int, \Modules\Job\Models\Parameter> $parameters
 * @property-read int|null $parameters_count
 * @property-read \Modules\Job\Models\Task|null $task
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
 * @method static \Modules\Job\Database\Factories\FrequencyFactory factory($count = null, $state = [])
 * @method static Builder<static>|Frequency newModelQuery()
 * @method static Builder<static>|Frequency newQuery()
 * @method static Builder<static>|Frequency query()
 * @method static Builder<static>|Frequency whereCreatedAt($value)
 * @method static Builder<static>|Frequency whereCreatedBy($value)
 * @method static Builder<static>|Frequency whereId($value)
 * @method static Builder<static>|Frequency whereInterval($value)
 * @method static Builder<static>|Frequency whereLabel($value)
 * @method static Builder<static>|Frequency whereTaskId($value)
 * @method static Builder<static>|Frequency whereUpdatedAt($value)
 * @method static Builder<static>|Frequency whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Frequency extends BaseModel
{
    // use HasParameters;

    // protected $table = 'task_frequencies';

    protected $fillable = [
        'id',
        'label',
        'interval',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function parameters(): HasMany
    {
        return $this->hasMany(Parameter::class);
    }
}
