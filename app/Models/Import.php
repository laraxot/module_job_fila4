<?php

/**
 * ---.
 */

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
use Modules\Job\Database\Factories\ImportFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;

/**
 * @method static ImportFactory factory($count = null, $state = [])
 * @method static Builder|Import newModelQuery()
 * @method static Builder|Import newQuery()
 * @method static Builder|Import query()
 * @property int $id
 * @property Carbon|null $completed_at
<<<<<<< HEAD
=======
=======
/**
 * @method static \Modules\Job\Database\Factories\ImportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Import newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Import newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Import query()
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $completed_at
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @property string $file_name
 * @property string $file_path
 * @property string $importer
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
 * @method static Builder|Import whereCompletedAt($value)
 * @method static Builder|Import whereCreatedAt($value)
 * @method static Builder|Import whereCreatedBy($value)
 * @method static Builder|Import whereDeletedAt($value)
 * @method static Builder|Import whereDeletedBy($value)
 * @method static Builder|Import whereFileName($value)
 * @method static Builder|Import whereFilePath($value)
 * @method static Builder|Import whereId($value)
 * @method static Builder|Import whereImporter($value)
 * @method static Builder|Import whereProcessedRows($value)
 * @method static Builder|Import whereSuccessfulRows($value)
 * @method static Builder|Import whereTotalRows($value)
 * @method static Builder|Import whereUpdatedAt($value)
 * @method static Builder|Import whereUpdatedBy($value)
 * @method static Builder|Import whereUserId($value)
 * @property string|null $user_type
 * @method static Builder|Import whereUserType($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereImporter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereProcessedRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereSuccessfulRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereTotalRows($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUserId($value)
 * @property string|null $user_type
 * @method static \Illuminate\Database\Eloquent\Builder|Import whereUserType($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperImport
 * @mixin \Eloquent
 */
class Import extends BaseModel
{
    protected $fillable = [
        'id',
        'completed_at',
        'file_name',
        'file_path',
        'importer',
        'processed_rows',
        'total_rows',
        'successful_rows',
        'user_id',
    ];

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
            'data' => 'json',
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
            'payload' => 'array',
            'completed_at' => 'datetime',
            // 'updated_at' => 'datetime:Y-m-d H:00',
            // 'created_at' => 'datetime:Y-m-d',
            // 'created_at' => 'datetime:d/m/Y H:i'
        ];
    }
}
