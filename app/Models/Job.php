<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Override;
use Modules\Job\Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
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
use Modules\Job\Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;
use Webmozart\Assert\Assert;

use function Safe\json_decode;

/**
 * Modules\Job\Models\Job.
 *
 * @property int $id
 * @property string $queue
 * @property array $payload
 * @property int $attempts
 * @property int|null $reserved_at
 * @property int $available_at
 * @property Carbon $created_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $updated_at
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
 * @method static JobFactory factory($count = null, $state = [])
 * @method static Builder|Job newModelQuery()
 * @method static Builder|Job newQuery()
 * @method static Builder|Job query()
 * @method static Builder|Job whereAttempts($value)
 * @method static Builder|Job whereAvailableAt($value)
 * @method static Builder|Job whereCreatedAt($value)
 * @method static Builder|Job whereCreatedBy($value)
 * @method static Builder|Job whereId($value)
 * @method static Builder|Job wherePayload($value)
 * @method static Builder|Job whereQueue($value)
 * @method static Builder|Job whereReservedAt($value)
 * @method static Builder|Job whereUpdatedAt($value)
 * @method static Builder|Job whereUpdatedBy($value)
 * @property mixed $display_name
 * @property mixed $status
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Job\Database\Factories\JobFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereAvailableAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereReservedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedBy($value)
 * @property mixed $display_name
 * @property mixed $status
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 * @mixin IdeHelperJob
 * @mixin \Eloquent
 */
class Job extends BaseModel
{
    protected $fillable = [
        'id',
        'queue',
        'payload',
        'attempts',
        'reserved_at',
        'available_at',
        'created_at',
    ];

    public function getTable(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        Assert::string(
            $res = config('queue.connections.database.table'),
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::string($res = config('queue.connections.database.table'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($res = config('queue.connections.database.table'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

        return $res;
    }

    public function status(): Attribute
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
        return Attribute::make(get: function (): string {
            if ($this->reserved_at) {
                return 'running';
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)

            return 'waiting';
        });
    }

    public function getDisplayNameAttribute(): null|string
    {
        Assert::string($json = $this->attributes['payload'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $payload = json_decode($json, true);
        if (!is_array($payload)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        return Attribute::make(
            get: function (): string {
                if ($this->reserved_at) {
                    return 'running';
                }
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

            return 'waiting';
        });
    }

    public function getDisplayNameAttribute(): null|string
    {
        Assert::string($json = $this->attributes['payload'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $payload = json_decode($json, true);
<<<<<<< HEAD
        if (! is_array($payload)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($payload)) {
>>>>>>> b93ef594b4 (.)
=======

                return 'waiting';
            },
        );
    }

    public function getDisplayNameAttribute(): ?string
    {
        Assert::string($json = $this->attributes['payload']);
        $payload = json_decode($json, true);
        if (! is_array($payload)) {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            return null;
        }

        Assert::nullOrString($res = $payload['displayName'] ?? null);

        return $res;
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
            'id' => 'integer',
            'queue' => 'string',
            'payload' => 'array',
            'attempts' => 'integer',
            'reserved_at' => 'integer',
            'available_at' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'created_by' => 'string',
            'updated_by' => 'string',
        ];
    }
}
