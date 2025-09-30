<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
use Modules\Job\Database\Factories\ExportFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Eloquent;
use Filament\Actions\Exports\Models\Export as BaseExport;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @method static ExportFactory factory($count = null, $state = [])
 * @method static Builder|Export newModelQuery()
 * @method static Builder|Export newQuery()
 * @method static Builder|Export query()
 * @property int $id
 * @property Carbon|null $completed_at
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Job\Database\Factories\ExportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Export newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Export newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Export query()
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $completed_at
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property string $file_disk
 * @property string|null $file_name
 * @property string $exporter
 * @property int $processed_rows
 * @property int $total_rows
 * @property int $successful_rows
 * @property string|null $user_id
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
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @method static Builder|Export whereCompletedAt($value)
 * @method static Builder|Export whereCreatedAt($value)
 * @method static Builder|Export whereCreatedBy($value)
 * @method static Builder|Export whereDeletedAt($value)
 * @method static Builder|Export whereDeletedBy($value)
 * @method static Builder|Export whereExporter($value)
 * @method static Builder|Export whereFileDisk($value)
 * @method static Builder|Export whereFileName($value)
 * @method static Builder|Export whereId($value)
 * @method static Builder|Export whereProcessedRows($value)
 * @method static Builder|Export whereSuccessfulRows($value)
 * @method static Builder|Export whereTotalRows($value)
 * @method static Builder|Export whereUpdatedAt($value)
 * @method static Builder|Export whereUpdatedBy($value)
 * @method static Builder|Export whereUserId($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property Model|Eloquent|null $user
 * @property string|null $user_type
 * @method static Builder|Export whereUserType($value)
 * @mixin Eloquent
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereExporter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereFileDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereProcessedRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereSuccessfulRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereTotalRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUserId($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property \Illuminate\Database\Eloquent\Model|Eloquent|null $user
 * @property string|null $user_type
 * @method static \Illuminate\Database\Eloquent\Builder|Export whereUserType($value)
 * @mixin \Eloquent
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperExport
 * @mixin Eloquent
 */
class Export extends BaseExport
{
    /** @var string */
    protected $connection = 'job';

    protected $fillable = [
        'id',
        'completed_at',
        'file_disk',
        'file_name',
        'exporter',
        'processed_rows',
        'total_rows',
        'successful_rows',
        'user_id',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'data' => 'json',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
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
            'payload' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'completed_at' => 'datetime',
            // 'updated_at' => 'datetime:Y-m-d H:00',
            // 'created_at' => 'datetime:Y-m-d',
            // 'created_at' => 'datetime:d/m/Y H:i'
        ];
    }
}
