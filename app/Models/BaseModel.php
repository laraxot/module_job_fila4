<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\XotBaseModel;

/**
 * Base Model for Job module.
 *
 * Extends XotBaseModel and adds:
 * - Table prefix support for dynamic table naming
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @see \Modules\Xot\Models\XotBaseModel
 */
abstract class BaseModel extends XotBaseModel
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'job';

    /**
     * Table prefix for dynamic table naming.
     *
     * @var string|null
     */
    protected $prefix;

    /**
     * Create a new Eloquent model instance.
     *
     * Handles dynamic table prefix for Job module.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function __construct(array $attributes = [])
    {
        if (isset($this->prefix)) {
            $this->table = $this->prefix.$this->table;
        }

        parent::__construct($attributes);
    }
}
