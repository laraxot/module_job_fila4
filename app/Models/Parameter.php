<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Modules\Job\Database\Factories\ParameterFactory;
use Modules\Xot\Contracts\ProfileContract;

/**
 * Modules\Job\Models\Parameter.
 *
 * @property int $id
 * @property int $frequency_id
 * @property string $name
 * @property string $value
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Frequency|null $task
 *
 * @method static ParameterFactory factory($count = null, $state = [])
 * @method static Builder|Parameter newModelQuery()
 * @method static Builder|Parameter newQuery()
 * @method static Builder|Parameter query()
 * @method static Builder|Parameter whereCreatedAt($value)
 * @method static Builder|Parameter whereCreatedBy($value)
 * @method static Builder|Parameter whereFrequencyId($value)
 * @method static Builder|Parameter whereId($value)
 * @method static Builder|Parameter whereName($value)
 * @method static Builder|Parameter whereUpdatedAt($value)
 * @method static Builder|Parameter whereUpdatedBy($value)
 * @method static Builder|Parameter whereValue($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @mixin \Eloquent
 */
/**
 * @property string $id
 * @property int $frequency_id
 * @property string $name
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Job\Models\Frequency|null $task
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Job\Database\Factories\ParameterFactory factory($count = null, $state = [])
 * @method static Builder<static>|Parameter newModelQuery()
 * @method static Builder<static>|Parameter newQuery()
 * @method static Builder<static>|Parameter query()
 * @method static Builder<static>|Parameter whereCreatedAt($value)
 * @method static Builder<static>|Parameter whereCreatedBy($value)
 * @method static Builder<static>|Parameter whereFrequencyId($value)
 * @method static Builder<static>|Parameter whereId($value)
 * @method static Builder<static>|Parameter whereName($value)
 * @method static Builder<static>|Parameter whereUpdatedAt($value)
 * @method static Builder<static>|Parameter whereUpdatedBy($value)
 * @method static Builder<static>|Parameter whereValue($value)
 * @mixin \Eloquent
 */
class Parameter extends BaseModel
{
    // protected $table = 'frequency_parameters';

    protected $fillable = [
        'id',
        'name',
        'value',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'id' => 'integer',
            'frequency_id' => 'integer',
            'name' => 'string',
            'value' => 'string',
            'created_by' => 'string',
            'updated_by' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ]);
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(Frequency::class);
    }
}
