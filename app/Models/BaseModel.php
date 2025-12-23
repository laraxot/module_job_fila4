<?php

declare(strict_types=1);

namespace Modules\Job\Models;

<<<<<<< HEAD
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
<<<<<<< HEAD
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
=======
<<<<<<< HEAD
 *
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
=======
 * 
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * 
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
    // //use Cachable;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'job';

    /** @var string|null */
    protected $prefix;

    /** @var list<string> */
    protected $fillable = ['id'];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    public function __construct(array $attributes = [])
    {
        if (isset($this->prefix)) {
<<<<<<< HEAD
            $this->table = $this->prefix . $this->table;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $this->table = $this->prefix . $this->table;
=======
            $this->table = $this->prefix.$this->table;
>>>>>>> a12f125f4a (.)
=======
            $this->table = $this->prefix . $this->table;
>>>>>>> b93ef594b4 (.)
=======
            $this->table = $this->prefix.$this->table;
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        }

        parent::__construct($attributes);
    }

    /**
     * ----
     * Create a new factory instance for the model.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
     * @return Factory<static>
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
<<<<<<< HEAD
=======
=======
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
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
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
