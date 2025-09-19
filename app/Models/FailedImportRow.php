<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> e1b0bf9 (.)
=======
use Override;
>>>>>>> 7d4742a (.)
use Modules\Job\Database\Factories\FailedImportRowFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;

/**
 * @method static FailedImportRowFactory factory($count = null, $state = [])
 * @method static Builder|FailedImportRow newModelQuery()
 * @method static Builder|FailedImportRow newQuery()
 * @method static Builder|FailedImportRow query()
 * @property int $id
 * @property array $data
 * @property int $import_id
 * @property string|null $validation_error
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @method static Builder|FailedImportRow whereCreatedAt($value)
 * @method static Builder|FailedImportRow whereCreatedBy($value)
 * @method static Builder|FailedImportRow whereData($value)
 * @method static Builder|FailedImportRow whereId($value)
 * @method static Builder|FailedImportRow whereImportId($value)
 * @method static Builder|FailedImportRow whereUpdatedAt($value)
 * @method static Builder|FailedImportRow whereUpdatedBy($value)
 * @method static Builder|FailedImportRow whereValidationError($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperFailedImportRow
 * @mixin \Eloquent
 */
class FailedImportRow extends BaseModel
{
    protected $fillable = [
        'id',
        'data',
        'import_id',
        'validation_error',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> e1b0bf9 (.)
=======
    #[Override]
>>>>>>> 7d4742a (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'data' => 'json',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',

>>>>>>> e1b0bf9 (.)
=======
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
>>>>>>> 7d4742a (.)
            'payload' => 'array',
            'completed_at' => 'datetime',
            // 'updated_at' => 'datetime:Y-m-d H:00',
            // 'created_at' => 'datetime:Y-m-d',
            // 'created_at' => 'datetime:d/m/Y H:i'
        ];
    }
}
