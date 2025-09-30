<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Modules\Job\Database\Factories\ParameterFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
use Modules\Job\Database\Factories\ParameterFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
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
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Job\Database\Factories\ParameterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereFrequencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter whereValue($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperParameter
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

    public function task(): BelongsTo
    {
        return $this->belongsTo(Frequency::class);
    }
}
