<?php

declare(strict_types=1);

/**
 * @see HusamTariq\FilamentDatabaseSchedule
 */

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
use Modules\Job\Database\Factories\ScheduleHistoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modules\Job\Models\ScheduleHistory.
 *
 * @property Schedule|null $command
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @method static ScheduleHistoryFactory factory($count = null, $state = [])
 * @method static Builder|ScheduleHistory newModelQuery()
 * @method static Builder|ScheduleHistory newQuery()
 * @method static Builder|ScheduleHistory query()
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Job\Database\Factories\ScheduleHistoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory query()
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property int $id
 * @property array|null $params
 * @property string $output
 * @property array|null $options
<<<<<<< HEAD
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
=======
<<<<<<< HEAD
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property int|null $schedule_id
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @method static Builder|ScheduleHistory whereCommand($value)
 * @method static Builder|ScheduleHistory whereCreatedAt($value)
 * @method static Builder|ScheduleHistory whereCreatedBy($value)
 * @method static Builder|ScheduleHistory whereDeletedAt($value)
 * @method static Builder|ScheduleHistory whereDeletedBy($value)
 * @method static Builder|ScheduleHistory whereId($value)
 * @method static Builder|ScheduleHistory whereOptions($value)
 * @method static Builder|ScheduleHistory whereOutput($value)
 * @method static Builder|ScheduleHistory whereParams($value)
 * @method static Builder|ScheduleHistory whereScheduleId($value)
 * @method static Builder|ScheduleHistory whereUpdatedAt($value)
 * @method static Builder|ScheduleHistory whereUpdatedBy($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereScheduleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleHistory whereUpdatedBy($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperScheduleHistory
 * @mixin \Eloquent
 */
class ScheduleHistory extends BaseModel
{
    /*
     * The database table used by the model.
     *
     * @var string
     */
    // protected $table;

    protected $fillable = [
        'command',
        'params',
        'output',
        'options',
    ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)

    /*
     * Creates a new instance of the model.
     *
     * @param array $attributes
     * @return void
     */
    /*
     * public function __construct(array $attributes = [])
     * {
     * parent::__construct($attributes);
     *
     * $this->table = Config::get('filament-database-schedule.table.schedule_histories', 'schedule_histories');
     * }
     *
     */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    /*
         * Creates a new instance of the model.
         *
         * @param array $attributes
         * @return void
         */
    /*
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->table = Config::get('filament-database-schedule.table.schedule_histories', 'schedule_histories');
    }

    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /*
     * Creates a new instance of the model.
     *
     * @param array $attributes
     * @return void
     */
    /*
     * public function __construct(array $attributes = [])
     * {
     * parent::__construct($attributes);
     *
     * $this->table = Config::get('filament-database-schedule.table.schedule_histories', 'schedule_histories');
     * }
     *
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

    public function command(): BelongsTo
    {
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
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
            'params' => 'array',
            'options' => 'array',
        ];
    }
}
